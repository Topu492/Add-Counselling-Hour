<?php

/*
|--------------------------------------------------------------------------
|                        Web & Setup Routes
|--------------------------------------------------------------------------
*/


Route::get('/install','FrontendController@install');
Route::get('/clear', 'FrontendController@clear');
Route::get('/', 'FrontendController@indexpage')->name('frontEndRoot');
Route::get('/dashboard', function () { return redirect (route('user.dashboard')); });
Route::get('/admin', function () { return redirect (route('admin.dashboard')); });
Route::get('/home', function () { return redirect (route('user.dashboard')); });

/*
|--------------------------------------------------------------------------
|                         Auth Routes
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');



/*
|--------------------------------------------------------------------------
|                        Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['as'=>'admin.' , 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' =>['auth', 'admin']], function() {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/password/change','ProfileController@passChange')->name('change.password');
    Route::post('password/change','ProfileController@passChangeReq')->name('changepaswword');
    Route::get('/settings','SiteSettingsController@index')->name('settings');
    Route::post('settings-update','SiteSettingsController@store')->name('settings.store');

    Route::get('show/all_teachers','DashboardController@showDoctorAll')->name('showAllDoctor');
    Route::get('show/all_user','DashboardController@showAllUser')->name('showAllUser');
    Route::get('show/all_student','DashboardController@showAllNurse')->name('showAllNurse');

    Route::get('/delete/user/{id}', 'DashboardController@destroy')->name('deleteUser');
    Route::get('/delete/doctor/{id}', 'DashboardController@destroyDoctor')->name('deleteDoctor');


});

Route::group([
    'namespace' => '\Haruncpi\LaravelLogReader\Controllers',
    'middleware' => ['auth','admin']
],
    function () {
        Route::get(config('laravel-log-reader.view_route_path'), 'LogReaderController@getIndex');
        Route::post(config('laravel-log-reader.view_route_path'), 'LogReaderController@postDelete');
        Route::get(config('laravel-log-reader.api_route_path'), 'LogReaderController@getLogs');
    }
);


/*
|--------------------------------------------------------------------------
|                          Booking Routes
|--------------------------------------------------------------------------
*/
    Route::get('/status-change/{id}','BookingController@statusChangeForBooking')->name('statusChangePage');
    Route::post('status_change','BookingController@bookingStatusStore')->name('statusChangeOpt');
    Route::get('/booking/delete/{id}', 'BookingController@delete')->name('bookingDelete');

    /*
|--------------------------------------------------------------------------
|                          Campus Routes
|--------------------------------------------------------------------------
*/
    Route::get('/view/campus','AreaController@show')->name('showArea');
    Route::get('/add/campus','AreaController@index')->name('addArea');
    Route::post('store-area', 'AreaController@store');
    Route::get('/campus/edit/{area}','AreaController@edit')->name('editArea');
    Route::post('/update-area','AreaController@update')->name('updateArea');
    Route::get('/campus/delete/{id}','AreaController@delete')->name('deleteArea');

    Route::get('/view/department', 'CategoryController@view')->name('showCategory');
    Route::get('/department/delete/{id}', 'CategoryController@delete')->name('deleteCategory');
    Route::get('/department/add','CategoryController@index')->name('addCategory');
    Route::post('store-category', 'CategoryController@store');

/*
|--------------------------------------------------------------------------
|                          Teacher as Doctor Routes
|--------------------------------------------------------------------------
*/
Route::group(['as'=>'doctor.', 'prefix' => 'teacher', 'namespace' => 'Doctor', 'middleware' =>['auth', 'doctor']], function() {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile/settings', 'DashboardController@profile_seetings')->name('doctorProfileSeetings');
    Route::post('profile/update/pic', 'DashboardController@updateProfilePic')->name('update.profile_pic');
    Route::post('profile/update', 'DashboardController@profileSettings')->name('upadeteprofileSeetings');



});
    Route::get('/change-password','CustomAuthController@passwordChange')->name('password.change');
    Route::post('/change-password', 'CustomAuthController@FormPassChange')->name('passwordFrom');
    Route::get('/custom/login', 'CustomAuthController@showPage')->name('customDoctorLogin');
    Route::post('custom-login', 'CustomAuthController@login');
    Route::get("teacher/register", "TeacherController@signUpForm")->name("doctorSignUpForm");
    Route::post("doctor/signup", "TeacherController@signUpFormSubmit")->name("doctorSignUpFormSubmit");

    Route::get('profile/{username}' , 'ProfileController@show')->name('profile.show');

    // New Code Start
    Route::get('/teacher/counseling_hour/schedule/show', 'ScheduleController@index')->name('showSchedule');
    Route::post('schedule/post','ScheduleController@store')->name('schedulePost');
    Route::get('/schedule/delete/{id}', 'ScheduleController@delete')->name('deleteSchedule');


// Teacher Appointment Booking Action

    Route::get('/booking_action/edit/{id}','TeacherBookingController@index')->name('teacherStatusChangePage');
    Route::post('/teacher/booking_action','TeacherBookingController@teacherBookingControl')->name('teacher.status');



/*
|--------------------------------------------------------------------------
|                               Nurse as student Routes
|--------------------------------------------------------------------------
*/

Route::group(['as'=>'nurse.' ,'prefix' => 'student', 'namespace' => 'Nurse', 'middleware' =>['auth', 'nurse']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    // Nurse Auth Controller
    Route::get('change-password',   'NurseAuthController@changePasswordPage')->name('nursePassChange');
    Route::post('change-password',  'NurseAuthController@changePasswordAction')->name('nursePassChangeAction');
    // Profile Picture & Settings Update
    Route::post('profile_pic/upload',  'NurseProfileController@nurse_picUpdate')->name('nursePicUpdate');
    Route::get('/profile/settings',    'NurseProfileController@settings_page')->name('nurse_ProfilePage');
    Route::post('/profile/update',     'NurseProfileController@profile_update')->name('profileAllUpdate');
});
Route::get('student/register',      'Nurse\NurseAuthController@nurseSignUpForm')->name("nurse.signup");
Route::post('nurse/signup',     'Nurse\NurseAuthController@registerNurse')->name('nurse.signup_page');

/*
|--------------------------------------------------------------------------
|                               User Routes
|--------------------------------------------------------------------------
*/
Route::group(['as'=>'user.' ,'prefix' => 'user', 'namespace' => 'User', 'middleware' =>['auth', 'user']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

/*
|--------------------------------------------------------------------------
|                            Search & Booking
|--------------------------------------------------------------------------
*/
Route::get('/search/your/teacher', 'SearchController@search')->name('search.doctor');
Route::get('/search/doctor', 'SearchController@search_doctor')->name('search.doctorProfile');

Route::get('/login/user', 'Auth\LoginController@showUserLoginForm');



Route::get('/booking/info/{id}','BookingController@submit_info')->name('bookingInfoSubmitPage');

 // Route::get('booking/confirmation/{id}/done','BookingController@booking_confirmation')->name('booking.confirmation');
 Route::post('booking/confirmation','BookingController@booking_confirmation')->name('booking.confirmation');


Route::get('/booking-show','BookingController@showbooking')->name('bookingShow');





