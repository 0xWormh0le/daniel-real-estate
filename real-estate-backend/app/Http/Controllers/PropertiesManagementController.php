<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Company;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\PropertyFeature;
use App\Models\PropertyStatus;
use App\Models\PropertyDetail;
use App\Traits\CaptureIpTrait;
use App\Models\Activation;
use App\Models\PropertyGallery;
use App\Models\Attachment;
use Auth;
use Illuminate\Http\Request;
use jeremykenedy\LaravelRoles\Models\Role;
use Validator;
use Illuminate\Support\Facades\DB;


use File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Image;
use View;
use Webpatser\Uuid\Uuid;

use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;
use App\Upload;
use Illuminate\Support\Str;


use App\Logic\Property\PropertyRepository;


class PropertiesManagementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $timestamp;
    protected $repository;

    public function __construct(PropertyRepository $repo)
    {
        $this->middleware('auth');
        $this->timestamp = date("Y-m-d H:i:s");
        
        $this->repository = $repo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $properties = Property::all();
        $pageTitle = "";
       
        return View('propertymanagement.show-properties', compact('pageTitle', 'properties'));
    }




    public function properties()
    {
        
        $properties = Property::all();
        $property_companies = DB::Select('SELECT
            properties.id, companies.name
        FROM
            users, properties, companies
        where users.id = properties.user_id and users.company_id = companies.id');
        
        $property_types = PropertyType::all();
        $property_features = PropertyFeature::all();
        $users = User::all();
        $companies = Company::all();
        
        $pageTitle = "";
       
        return View('propertymanagement.show-properties', compact('pageTitle', 'properties', 'property_types', 'property_features',
         'users', 'property_companies', 'companies'));
    }
    public function showBySelection(Request $request){
        $company_id = $request['company_id'];
        $properties = DB::Select("SELECT
            properties.*
        FROM
            users, properties, companies
        where users.id = properties.user_id and users.company_id = companies.id and companies.id = '$company_id'");

        $property_companies = DB::Select("SELECT
            properties.id, companies.name
        FROM
            users, properties, companies
        where users.id = properties.user_id and users.company_id = companies.id and companies.id = '$company_id'");
        
        $property_types = PropertyType::all();
        $property_features = PropertyFeature::all();
        $users = User::all();
        $companies = Company::all();
        $pageTitle = "";
       
        return View('propertymanagement.show-properties', compact('pageTitle', 'properties', 'property_types', 'property_features',
         'users', 'property_companies', 'companies', 'company_id'));
    }
    public function image_upload(Request $request){
        
        $att = new Attachment;
        $imageName = request()->file->getClientOriginalName();
        request()->file->move(public_path('uploads'), $imageName);
        
        $att->big = 'uploads/galleries/big/' . $imageName . '.jpg';
        $att->medium = 'uploads/galleries/big/' . $imageName . '.jpg';
        $att->small = 'uploads/galleries/big/' . $imageName . '.jpg';
        $att->save();
        
        $last_property_id = (Property::all()->last())->id;

        $gallery = new PropertyGallery;
        $gallery->property_id = $last_property_id + 1;
        $gallery->plan_id = $last_plan_id + 1;
        $gallery->type = "Video";
        $gallery->name = "";
        $gallery->attachment_id = $att->id;
        $gallery->save();




    	return response()->json(['uploaded' => '/uploads/'.$imageName]);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $property_types = PropertyType::all();
        $property_features = PropertyFeature::all();
        $property_statuses = PropertyStatus::all();
      

        $users = User::all();
       
            $data = [
                'roles' => $roles,
                'users' => $users,
                'property_types' => $property_types,
                'property_features' => $property_features,
                'property_statuses' => $property_statuses,
                
            ];
            return view('propertymanagement.create-property')->with($data);
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $currentUser = Auth::user();
        if( $request->input('is_featured') == 'on'){
            $featured = 1;
        }else{
            $featured = 0;
        }


        $data1 = [
            'title'             => $request->input('title'),
            'description'       => $request->input('description'),
            'featured'        => $featured,
            'user_id'        => $currentUser->id,
            'property_type'   => $request->input('property_type_id'),
            'features' => $request->input('features'),
            'additional_features' => $request->input('additional_features'),
            'status' => $request->input('property_status'),
            'details' => $request->input('property_detail'),
           
        ];
        
        
        $property_id = ($this->repository->storeProperty($data1))->id;
        
        $data2 = [
            'plan' => $request->input('plan')
        ];
     

        $plan_id = $this->repository->storePlan($data2, $property_id);

        return redirect('admin/properties')->with('success');
        
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $property = Property::findOrFail($id);
        
        $property_types = PropertyType::all();
        $property_features = PropertyFeature::all();
        $property_statuses = PropertyStatus::all();
        $property_details = PropertyDetail::where('property_id', $id)->get();
        $property_current_statuses = DB::table('property_status_pivot')->where('property_id', $id)->get();
        $property_current_features = DB::table('property_feature_pivot')->where('property_id', $id)->get();
        $property_videos = DB::table('attachments')->join('property_galleries',  function($join) use($id) {
            $join -> on('attachments.id', '=', 'property_galleries.attachment_id')
                  ->where('property_galleries.type', '=', 'Video')
                  ->where('property_galleries.property_id', '=',  $id)
                  ->select('attachments.name', 'property_galleries.*');
            })
            ->get();
        $property_plans = DB::table('property_galleries')
            ->join('attachments',  function($join) use($id) {
            $join -> on('property_galleries.attachment_id', '=', 'attachments.id')
                  ->where('property_galleries.plan_id', '!=', 0)
                  ->where('property_galleries.property_id', '=',  $id)
                  ->select('attachments.small');
            })
            ->join('property_plans',  function($join) use($id) {
                $join -> on('property_galleries.plan_id', '=', 'property_plans.id')
                      ->where('property_galleries.plan_id', '!=', 0)
                      ->where('property_plans.property_id', '=',  $id)
                      ->select('property_plans.*');
                })
            ->get();
        $property_galleries =  DB::table('attachments')->join('property_galleries',  function($join) use($id) {
            $join -> on('attachments.id', '=', 'property_galleries.attachment_id')
                  ->where('property_galleries.type', '=', 'Image')
                  ->where('property_galleries.plan_id', '=', 0)
                  ->where('property_galleries.property_id', '=',  $id)
                  ->select('attachments.name', 'property_galleries.*');
            })
            ->get();
        $property_additional_features = DB::table('property_additional_features')->where('property_id', $id)->get();

        $data = [

            'property'        => $property,
            'property_types' => $property_types,
            'property_features' => $property_features,
            'property_statuses' => $property_statuses,
            'property_details' => $property_details,
            'property_current_statuses' => $property_current_statuses,
            'property_current_features' => $property_current_features,
            'property_videos' => $property_videos,
            'property_plans' => $property_plans,
            'property_galleries' => $property_galleries,
            'property_additional_features' => $property_additional_features
            
        ];

        return view('propertymanagement.edit-property')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $currentUser = Auth::user();
        if( $request->input('is_featured') == 'on'){
            $featured = 1;
        }else{
            $featured = 0;
        }


        $data1 = [
            'id'                => $id,
            'title'             => $request->input('title'),
            'description'       => $request->input('description'),
            'featured'        => $featured,
            'user_id'        => $currentUser->id,
            'property_type'   => $request->input('property_type_id'),
            'features' => $request->input('features'),
            'additional_features' => $request->input('additional_features'),
            'status' => $request->input('property_status'),
            'details' => $request->input('property_detail'),
           
        ];
        
        
        $property_id = ($this->repository->storeProperty($data1))->id;
        
        $data2 = [
            'id' => $id,
            'plan' => $request->input('plan')
        ];
     

        $plan_id = $this->repository->storePlan($data2, $id);

        return redirect('admin/properties')->with('success');
       
        return View('companymanagement.show-companies', compact('pageTitle', 'companies'));
        // return redirect('admin/properties')->with('success');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $currentUser = Auth::user();
        $company = Company::findOrFail($id);
        
        $company->delete();

        return redirect('admin/properties')->with('success', trans('companymanagement.deleteSuccess'));

    }
}
