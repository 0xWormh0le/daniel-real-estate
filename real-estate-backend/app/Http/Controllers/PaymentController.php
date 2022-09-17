<?php
namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Plan;
use App\Models\PricingPlan;
use App\Models\Subscription;
use App\Models\Customers;
use App\Models\Invoice;
use Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Redirect;
use App\Models\UsersStripe;
use \Stripe\Stripe;
use \Stripe\Customer;
use \Stripe\ApiOperations\Create;
use \Stripe\Charge;
use App\Models\DomainList;
use App\Models\Payment;

use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;
// use Laravel\Cashier\Billable;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $apiKey;
    protected $timestamp;


    private $stripeService;

    public function __construct()
    {
        \Stripe\Stripe::setApiKey('sk_test_eFZmzM1OeSJQC4w2NGgspzPX00ifYkbrPm');
        // require_once "./././config/stripe_config.php";
        $this->apiKey = "sk_test_eFZmzM1OeSJQC4w2NGgspzPX00ifYkbrPm";
        $this->timestamp = date("Y-m-d H:i:s");
        // $this->stripeService = new PhpPot\Service\Stripe\Stripe();
        // $this->stripeService->setVerifySslCerts(false);
        // $this->stripeService->setApiKey($this->apiKey);
    }
    public function pricing(){
        $plans = Plan::all();
        $currentUser = \Auth::user();
        if(empty($currentUser)){
            $user_id =0;
            $current_plan = null;
        }else{
            $user_id = $currentUser->id;
            $current_plan = Subscription::where('user_id', $user_id)->first();
        }
        // $user = User::findOrFail($currentUser->id);
        $pricing_plans = PricingPlan::all();
        return view('payment.pricing', compact('plans', 'pricing_plans', 'user_id', 'current_plan'));
    }

    public function show_plan(){
        $plans = Plan::all();
        $currentUser = \Auth::user();
        if(empty($currentUser)){
            $user_id =0;
            $current_plan = null;
        }else{
            $user_id = $currentUser->id;
            $current_plan = Subscription::where('user_id', $user_id)->first();
        }
        // $user = User::findOrFail($currentUser->id);
        $pricing_plans = PricingPlan::all();
        return view('payment.plan', compact('plans', 'pricing_plans', 'user_id', 'current_plan'));
    }

    public function index(){
        $plans = Plan::all();
        return view('payment.plan', compact('plans'));
    }
    public function show(Plan $plan, Request $request)
    {
       
        return view('payment.plan_show', compact('plan'));
    }
    public function home(){
        return view('payment.home');
    }
    public function save_info(Request $request){
        // echo "payment test";
        // exit();
        $successMessage = "";
        $stripeResponse = $this->chargeAmountFromCard($request);
    
        $cname = DomainList::where('id', $request->cname_id)->pluck('cname')->first();
        
        $amount = $stripeResponse["amount"] /100;
        $owner = \Auth::user();
        
        $param_type = 'ssdssss';
        $param_value_array = array(
            // $_POST['email'],
            // $_POST['item_number'],
            $amount,
            $stripeResponse["currency"],
            $stripeResponse["balance_transaction"],
            $stripeResponse["status"],
            json_encode($stripeResponse)
        );
        
        // $query = "INSERT INTO orders (email, item_number, paid_amount, paid_amount_currency, txn_id, payment_status) values (?, ?, ?, ?, ?, ?)";
        $id = DB::table('payment')->insert(
            array(
                'email' => $request->stripeEmail,
                'domain_list_id' => $request->cname_id ,
                'user_id' => $owner->id,
                'amount' => $amount,
                'currency_code' => $stripeResponse['currency'],
                'txn_id' =>$stripeResponse['balance_transaction'],
                'payment_status' => $stripeResponse['status'],
                'payment_response'=>json_encode($stripeResponse),
                'created_at' =>$this->timestamp
                
            ));
        
        if ($stripeResponse['amount_refunded'] == 0 && empty($stripeResponse['failure_code']) && $stripeResponse['paid'] == 1 && $stripeResponse['captured'] == 1 && $stripeResponse['status'] == 'succeeded') {
            DB::table('domain')->insert(
                array(
                    "domain" => $cname,
                    "user_id" => $owner->id,
                    "Type" => "Purchased",
                    "is_enable" => 1,
                    "created_at" => $this->timestamp,
                    "updated_at" => $this->timestamp

                )
            );
            $successMessage = "Stripe payment is completed successfully. The TXN ID is " . $stripeResponse["balance_transaction"];
        }else{
            $successMessage = "Error";
        }
        echo $successMessage;
        exit();
     
    }
    public function addCustomer($customerDetailsAry)
    {
        
        $customer = new Customer();
        
        $customerDetails = \Stripe\Customer::create($customerDetailsAry);
        
        return $customerDetails;
    }

    public function show_update_card(){
        return view('payment.update_card');
    }
    public function update_card(Request $request){
        if (isset($request['stripeToken'])){
            $customer_info = Customers::where('email', $request['stripeEmail'])->first();
        
            try {
              $cu = \Stripe\Customer::update(
                $customer_info->customer_id, 
                [
                  'source' => $request['stripeToken'], 
                  'shipping' => 'NewYork'
                ]
              );
     
          
              $success = "Your card details have been updated!";
              var_dump($success);
              exit();
            }
            catch(\Stripe\Exception\CardException $e) {
          
              // Use the variable $error to save any errors
              // To be displayed to the customer later in the page
              $body = $e->getJsonBody();
              $err  = $body['error'];
              $error = $err['message'];
              var_dump($body);
              exit();
            }
            // Add additional error handling here as needed
          }
    }

    public function chargeAmountFromCard($cardDetails)
    {
        $user = \Auth::user();
        $customerDetailsAry = array(
            'email' => $cardDetails['stripeEmail'],
            'source' => $cardDetails['stripeToken']
        );
        $customerResult = $this->addCustomer($customerDetailsAry);
     

        $details = DomainList::where('id', $cardDetails['cname_id'])->first();
        $cardDetailsAry = array(
            'customer' => $customerResult->id,
            'amount' => $details->price *100 ,
            'currency' => 'USD',
            
        );
        $customer_info = Customers::create(
            [
                'user_id'             => $user->id,
                'email'              => $cardDetails['stripeEmail'],
                'customer_id'        => $customerResult->id,
                // 'card_number'            => $request->input('email'),
                'created_at'         => $this->timestamp,
                'updated_at'         => $this->timestamp
                ]
            );
        $customer_info->save();
        $result = \Stripe\Charge::create($cardDetailsAry);
        return $result->jsonSerialize();
    }
    public function show_invoice_list(){
        $currentUser = \Auth::user();

        $user = User::findOrFail($currentUser->id);
       
      
        $subscription_date = strtotime(Subscription::where('user_id', $currentUser->id)->pluck('created_at')->first());
        $now =  time();
        $datediff = floor(($now - $subscription_date)/(60*60*24*30));
        $invoice_last = Invoice::select(DB::raw('Year(created_at) as year'), DB::raw('Month(created_at) as month'), DB::raw('invoice_name'), DB::raw('price'))->where('user_id', $currentUser->id)->latest()->first();
        if(!empty($invoice_last)){

            if(($invoice_last->year != (int)(date('Y'))) && ($invoice_last->month != (int)(date('m')))){
                // echo json_encode($datediff);
                for($i = 0; $i < $datediff ; $i++){
    
                    $new_invoice = Invoice::create([
                        'user_id' => $currentUser->id,
                        'invoice_name' => $invoice_last->invoice_name,
                        'price' => $invoice_last->price,
                        'created_at'         => $this->timestamp,
                        'updated_at'         => $this->timestamp
                    ]);
                    $new_invoice->save();
                }
            }else{
                
            }
            $invoice_lists = Invoice::where('user_id', $currentUser->id)->get();
    
            if(empty($invoice_lists)){
                $invoice_lists = array();
            }
            return view('payment.invoice_list', compact('user', 'invoice_lists'));
        }
        else{
            $invoice_lists = array();
            return view('payment.invoice_list', compact('user', 'invoice_lists'));
        }
        



    }
    public function show_invoice(Request $request){
        $currentUser = \Auth::user();
        $invoice_id = $request->id;

        $user = User::findOrFail($currentUser->id);
        $invoice = Invoice::where('id', $invoice_id)->first();


        return view('payment.invoice', compact('user', 'invoice'));
    }

    public function show_edit_plan(){
        $pricing_plans = PricingPlan::all();
        $plans = Plan::all();
        return view('payment.show_edit_plan', compact('plans', 'pricing_plans'));
    }
    public function show_billing(){
  
        $plans = Plan::all();
        $users = User::all();
        $payments = Payment::where('payment_status', 'succeeded')->get();
        $domain_lists = DomainList::all();
        $subscriptions = Subscription::where('stripe_plan', '!=', 'free')->get();
      

        return view('payment.show_billing', compact('users', 'payments', 'subscriptions', 'domain_lists', 'plans'));
    }
    public function payment_invoice_show($id){
        // $currentUser = \Auth::user();

        $payments = Payment::where('id', $id)->where('payment_status', 'succeeded')->get();
        $user = User::where('id', $payments[0]->user_id)->first();
        $domain_lists = DomainList::all();
        $subscriptions = [];
        $plans = Plan::all();
        return view('payment.invoice', compact('user', 'payments', 'domain_lists', 'subscriptions' , 'plans'));
    }
    public function subscription_invoice_show($id){
        // $currentUser = \Auth::user();

        $subscriptions = Subscription::where('id', $id)->get();
        // echo json_encode($subscriptions);
        

        $payments = [];
        $user = User::where('id', $subscriptions[0]->user_id)->first();
     
        $domain_lists = DomainList::all();
        $plans = Plan::all();
        return view('payment.invoice', compact('user', 'payments', 'domain_lists', 'subscriptions' , 'plans'));
    }
    public function edit_plan($id){
        $pricing_plan  = PricingPlan::findOrFail($id);
    
        $plans = Plan::all();

        // foreach ($tag->user_id as $tag_owner) {
        //     $currentUser = $tag_owner;
        // }

        $data = [
            'pricing_plan '   => $pricing_plan ,
            'plans'         => $plans,
           
        ];
        // echo json_encode($data);
        // exit();

        return view('payment.edit_plan',  compact('plans', 'pricing_plan'));
    }
    public function update_plan(Request $request, $id)
    {
        $user = Auth::user();
        $pricing_plan = PricingPlan::find($id);
        // echo "shortCode: " . $request->longURL . "<br/>";
        
        // $ipAddress = new CaptureIpTrait();

        // echo json_encode($request);
        // exit();
     
            $pricing_plan->number_of_links = $request->number_of_links;
            $pricing_plan->number_of_clicks_per_link = $request->number_of_clicks_per_link;
            $pricing_plan->number_of_custom_domains = $request->number_of_custom_domains;
            $pricing_plan->number_of_users = $request->number_of_users;
            
           
          
            if($request->link_shortener_enable == 'on'){
                $pricing_plan->link_shortener = 1;
            }else{
                $pricing_plan->link_shortener = 0;
            }

            if($request->smart_links_enable == 'on'){
                $pricing_plan->smart_links = 1;
            }else{
                $pricing_plan->smart_links = 0;
            }
            if($request->link_rotator_enable == 'on'){
                $pricing_plan->link_rotator = 1;
            }else{
                $pricing_plan->link_rotator = 0;
            }
            if($request->links_tags_notes_enable == 'on'){
                $pricing_plan->links_tags_notes = 1;
            }else{
                $pricing_plan->links_tags_notes = 0;
            }
            if($request->edit_links_enable == 'on'){
                $pricing_plan->edit_links = 1;
            }else{
                $pricing_plan->edit_links = 0;
            }
            if($request->select_redirect_type_enable == 'on'){
                $pricing_plan->select_redirect_type = 1;
            }else{
                $pricing_plan->select_redirect_type = 0;
            }
            if($request->smart_link_targeting_enable == 'on'){
                $pricing_plan->smart_link_targeting = 1;
            }else{
                $pricing_plan->smart_link_targeting = 0;
            }
            if($request->GEO_enable == 'on'){
                $pricing_plan->GEO = 1;
            }else{
                $pricing_plan->GEO = 0;
            }
            if($request->device_enable == 'on'){
                $pricing_plan->device = 1;
            }else{
                $pricing_plan->device = 0;
            }  
            
            if($request->browser_enable == 'on'){
                $pricing_plan->browser = 1;
            }else{
                $pricing_plan->browser = 0;
            } 
            
            if($request->connection_enable == 'on'){
                $pricing_plan->connection = 1;
            }else{
                $pricing_plan->connection = 0;
            } 
            
            if($request->OS_enable == 'on'){
                $pricing_plan->OS = 1;
            }else{
                $pricing_plan->OS = 0;
            }


            $pricing_plan->save();

           
            $pricing_plans = PricingPlan::all();
            $plans = Plan::all();
            return view('payment.show_edit_plan', compact('plans', 'pricing_plans'));
        
    }
    

}
