<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
 */

// Homepage Route
//Route::get('/', 'WelcomeController@welcome')->name('welcome');

// Authentication Routes

// use App\Console\Commands\ChatServer;

Auth::routes();

// Public Resource Route
Route::get('material.min.css.template', 'ThemesManagementController@template');

// Public Routes
Route::group(['middleware' => 'web'], function () {

    Route::get('/', ['as' => 'public.home', 'uses' => 'Auth\ActivateController@initial']);


   
    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home', 'uses' => 'UserController@home']);
    // Route::get('/password', ['as' => 'public.home', 'uses' => 'ShortenerController@makeShortUrl']);
    // Upoad file
    

   
    Route::get('/signup', 'Auth\RegisterController@signup');
    Route::post('/Auth/login', 'Auth\LoginController@login');
    Route::get('/Auth/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');


    // Activation Routes
    Route::get('/Auth/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/Auth/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/Auth/activation', ['as'       => 'authenticated.activation-resend', 'uses'       => 'Auth\ActivateController@resend']);
    Route::get('/Auth/activate_pricing', ['as'       => 'authenticated.activePricing', 'uses'       => 'Auth\ActivateController@activePricing']);
    Route::get('/exceeded', ['as'         => 'exceeded', 'uses'         => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as'   => 'social.handle', 'uses'   => 'Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'RestoreUserController@userReActivate']);
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated']], function () {

   
    // Activation Routes
    Route::get('/Auth/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])->name('activation-required');


    // Show users profile - viewable by other users.
    Route::get('profile/{user_id}', [
        'as'   => '{user_id}',
        'uses' => 'ProfilesController@show',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'ProfilesController@userProfileAvatar',
    ]);

    // Route for user profile background image
    Route::get('images/profile/{id}/background/{image}', [
        'uses' 		=> 'ProfilesController@userProfileBackgroundImage',
    ]);
});

// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser']], function () {
    // User Profile and Account Routes
    Route::resource(
        'profile',
        'ProfilesController', [
            'only' => [
                'account',
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{id}/updateUserAccount', [
        'as'   => '{id}',
        'uses' => 'ProfilesController@updateUserAccount',
    ]);
    

    Route::post('profile/{id}/updateAccount', [
        'as'   => '{id}',
        'uses' => 'ProfilesController@updateAccount',
    ]);



    Route::put('profile/{id}/updateUserPassword', [
        'as'   => '{id}',
        'uses' => 'ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{id}/deleteUserAccount', [
        'as'   => '{id}',
        'uses' => 'ProfilesController@deleteUserAccount',
    ]);

    // Route for user profile background image
    Route::get('account', [
        'as'   	=> '{id}',
        'uses' 	=> 'ProfilesController@account',
    ]);

    // Update User Profile Ajax Route
    Route::post('profile/{id}/updateAjax', [
        'as'   => '{id}',
        'uses' => 'ProfilesController@update',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);

    // Route to uplaod user background image
    Route::post('background/upload', ['as' => 'background.upload', 'uses' => 'ProfilesController@uploadBackground']);

    Route::get('/admin/users','UsersManagementController@users')->name('users');
    Route::get('/admin/users/{company_id}','UsersManagementController@showBySelection')->name('users_selection');
    Route::get('/users/create','UsersManagementController@create')->name('create_users');
    Route::post('/users/store','UsersManagementController@store')->name('store_users');
    Route::get('/users/{id}/edit','UsersManagementController@edit')->name('edit_users');
    Route::post('/users/{id}/update','UsersManagementController@update')->name('update_users');
    Route::get('/users/update_status','UsersManagementController@update_status')->name('update_status');
    Route::post('/users/{id}/delete','UsersManagementController@destroy')->name('delete_users');

    
    Route::get('/admin/companies','CompaniesManagementController@companies')->name('companies');
    Route::get('/companies/create','CompaniesManagementController@create')->name('create_companies');
    Route::post('/companies/store','CompaniesManagementController@store')->name('store_companies');
    Route::get('/companies/{id}/edit','CompaniesManagementController@edit')->name('edit_companies');
    Route::post('/companies/{id}/update','CompaniesManagementController@update')->name('update_companies');
    Route::post('/companies/{id}/delete','CompaniesManagementController@destroy')->name('delete_companies');

    Route::get('/admin/properties','PropertiesManagementController@properties')->name('properties');
    Route::get('/admin/properties/{company_id}','PropertiesManagementController@showBySelection')->name('properties_selection');
    Route::get('/properties/create','PropertiesManagementController@create')->name('create_properties');
    Route::post('/properties/store','PropertiesManagementController@store')->name('store_properties');
    Route::get('/properties/{id}/edit','PropertiesManagementController@edit')->name('edit_properties');
    Route::post('/properties/{id}/update','PropertiesManagementController@update')->name('update_properties');
    Route::post('/properties/{id}/delete','PropertiesManagementController@destroy')->name('delete_properties');

    Route::post('/properties/image_upload','PropertiesManagementController@image_upload')->name('image_upload');

    Route::get('/admin/applications', 'ApplicationController@index')->name('applications_index');
    Route::get('/admin/applications/{id}', 'ApplicationController@detail')->name('applications_detail');
    Route::post('/admin/applications/{id}', 'ApplicationController@update')->name('reason_update');

    Route::get('/admin/contracts', 'ContractController@index')->name('contracts_index');
    Route::get('/admin/contracts/{id}', 'ContractController@detail')->name('contracts_detail');
    Route::post('/contract','ContractController@create')->name('create_contract');
});




// Registered, activated, and is admin routes.
Route::group(['middleware' => ['auth', 'activated', 'role:admin']], function () {

   
    // Route::get('/admin/billing','PaymentController@billing')->name('billing');

 

    // mail sending
    Route::post('/mail/sendbasicemail', ['as' => 'mail.sendbasicemail', 'uses' => 'MailController@basic_email']);
    Route::post('/mail/sendhtmlemail', ['as' => 'mail.sendhtmlemail', 'uses' => 'MailController@html_email']);
    Route::post('/mail/sendattachmentemail', ['as' => 'mail.sendattachmentemail', 'uses' => 'MailController@attachment_email']);
    


    Route::resource('/users/deleted', 'SoftDeletesController', [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],
    ]);
    
   
    Route::resource('themes', 'ThemesManagementController', [
        'names'    => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);
    
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('php', 'AdminDetailsController@listPHPInfo');
    Route::get('routes', 'AdminDetailsController@listRoutes');
});
    