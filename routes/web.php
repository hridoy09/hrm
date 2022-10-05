<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\BranceController;
use App\Http\Controllers\CronController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\user\ShopUsercontroller;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [App\Http\Controllers\ShopAuth\LoginController::class, 'showLoginForm'])->name('login.shop');
Route::post('/login/shop/post', [App\Http\Controllers\ShopAuth\LoginController::class, 'login'])->name('login.shop.post');


Route::middleware('auth:shop')->group(function(){

    Route::get('list-employ-by-shop',[ShopUsercontroller::class, 'index'])->name('employ.list_by_shop');
    Route::get('user-index',[ShopUsercontroller::class, 'userindex'])->name('user.index');
    Route::get('shop-info',[ShopUsercontroller::class, 'shopinfo'])->name('shop.info');

    //shop Notification
    Route::get('shopnotification/view/{id}', [NotificationController::class,'notifyviewshop'])->name('notifyshop.view');
    Route::get('all-shop-notification',[NotificationController::class,'allshopnotify'])->name('allshopnotify.view');
    Route::get('shopnotification/clear', [NotificationController::class,'clearshopnotify'])->name('shopnotify.clear');
 //endshop Notification


});

Route::middleware('auth:web')->group(function(){

    Route::prefix('admin')->group(function () {

        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);
    // Start brance route

        Route::get('index',[BranceController::class,'adminindex'])->name('admin.index');
        Route::get('change-status-shop/{id}',[BranceController::class, 'changeStatus'])->name('change.status.shop');
        Route::get('list-brance', [BranceController::class, 'index'])->name('brance.list');
        Route::get('create-brance', [BranceController::class, 'create'])->name('brance.create');
        Route::post('store-brance', [BranceController::class, 'store'])->name('brance.store');
        Route::post('update-brance/{id}', [BranceController::class, 'update'])->name('brance.update');
        Route::get('edit-brance/{id}', [BranceController::class, 'edit'])->name('brance.edit');
        Route::get('brance-delete/{id}',[BranceController::class, 'destroy'])->name('brance.delete');


        // end brance route

        // employee route
       Route::get('list-employ-profile',[EmployeeController::class, 'index'])->name('employ.list');
       Route::get('create-employ-profile',[EmployeeController::class, 'create'])->name('employ.create');
       Route::post('store-employ-profile',[EmployeeController::class, 'store'])->name('employ.store');
       Route::get('edit-employ-profile/{id}',[EmployeeController::class, 'edit'])->name('employ.edit');
      Route::post('update-employ-profile/{id}',[EmployeeController::class, 'update'])->name('employ.update');
      Route::get('change-status/{id}',[EmployeeController::class, 'changeStatus'])->name('change.status');
      Route::get('employee-delete/{id}',[EmployeeController::class, 'destroy'])->name('employee.delete');
      //end employee route

    //report controller
    Route::get('active-employee-report', [ReportController::class,'activeemployee'])->name('active.employee.report');
    Route::get('inactive-employee-report', [ReportController::class,'inacctiveemployee'])->name('inactive.employee.report');
    Route::get('passport-expiry-report', [ReportController::class,'passportexpire'])->name('passport.expiry.report');
    Route::get('residence-expiry-report', [ReportController::class,'rdexpiry'])->name('rdexpiry.report');

    Route::get('workpermit-expiry-report', [ReportController::class,'workpermitreport'])->name('workpermit.report');

//end report controller

//Notification Controller

    Route::get('notification/view/{id}', [NotificationController::class,'notifyview'])->name('notify.view');
    Route::get('notification/clear', [NotificationController::class,'clearnotify'])->name('notify.clear');
    Route::get('all-notification',[NotificationController::class,'allnotify'])->name('allnotify.view');
//end notification controller

// website control
Route::get('logo-index',[LogoController::class,'index'])->name('index.logo');
Route::post('logo-store',[LogoController::class, 'store'])->name('store.logo');
Route::post('logo-update/{id}',[LogoController::class, 'update'])->name('update.logo');
Route::get('logo-edit/{id}',[LogoController::class, 'edit'])->name('edit.logo');
Route::get('logo-delete',[LogoController::class, 'destroy'])->name('delete.logo');


    });

});

//cronjob  controller
Route::get('/cron', [CronController::class,'cron']);
//End cronjob


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout/shop', [App\Http\Controllers\ShopAuth\LoginController::class, 'logout'])->name('logout.shop');
