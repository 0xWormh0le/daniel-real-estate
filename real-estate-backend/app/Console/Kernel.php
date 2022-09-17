<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Contract;
use Stripe\Stripe;
use Stripe\Charge;
use Config;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\ChatServerStop::class,
        // Commands\ChatServerStart::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        // $schedule->command('activations:clean')
        //          ->daily();

        // $schedule->command('pay:monthly')->dailyAt('8:00');
        $schedule->call(function () {
            Stripe::setApiKey(Config::get('services.stripe.secret'));
            $contracts = Contract::where('recurring', 1)
                ->whereNotNull('stripe_id')
                ->whereDay('created_at', now()->day)
                ->get();
            foreach ($contracts as $contract) {
                $amount = $contract->monthly_payment;
                $charge = Charge::create(array(
                    'customer' => $contract->stripe_id,
                    'amount' => $amount * 100,
                    'currency' => 'usd'
                ));
            }
        })->daily();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }

    protected $middleware = [
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
        'Illuminate\Cookie\Middleware\EncryptCookies',
        'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        'Illuminate\Session\Middleware\StartSession',
        'Illuminate\View\Middleware\ShareErrorsFromSession',
    
        // appending custom middleware 
        'MyApp\Http\Middleware\HttpsProtocol'       
    
    ];
}
