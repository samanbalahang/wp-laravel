<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\counterController;
use App\Http\Controllers\admin\dashPostController;
use App\Http\Controllers\admin\dashMediaController;
use App\Http\Controllers\admin\dashPageController;
use App\Http\Controllers\admin\dashCommentController;
use App\Http\Controllers\admin\dashFormController;
use App\Http\Controllers\admin\dashShopOrderController;
use App\Http\Controllers\admin\dashShopCustomerController;
use App\Http\Controllers\admin\dashShopCouponController;
use App\Http\Controllers\admin\dashShopReportController;
use App\Http\Controllers\admin\dashShopConfigController;
use App\Http\Controllers\admin\dashShopStatusController;

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

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| lara-admin
|--------------------------------------------------------------------------
|
| 
|
*/

Route::group(['prefix' => 'lara-admin'],function()
{
    //    acounter
    Route::resource('/',CounterController::class);


    //    posts
    Route::resource('/posts',dashPostController::class);
    // Route::get('/posts',['as'=>'dashposts','uses'=>'App\Http\Controllers\admin\post\dashpostController@index']);
    // Route::post('/posts/get-content-img',[dashpostController::class,"getReportImg"]);
    // Route::resource('/posts/categories',dashPostCatController::class);
    // Route::resource('/posts/tags',dashPostTagController::class);

    //    media
    Route::resource('/media',dashMediaController::class);

    //    pages
    Route::resource('/pages',dashPageController::class);

    //    comments
    Route::resource('/comments',dashCommentController::class);

    //    forms
    Route::resource('/forms',dashFormController::class);

    //    shop-manage
    Route::get('/shop-manage',['as'=>'shopManage.index','uses'=>'App\Http\Controllers\admin\dashShopManageController@index']);
    Route::group(['prefix' => 'shop-manage'],function() {
       Route::resource('/shop-orders',dashShopOrderController::class);
       Route::resource('/shop-customers',dashShopCustomerController::class);
       Route::resource('/shop-coupons',dashShopCouponController::class);
       Route::resource('/shop-report',dashShopReportController::class);
       Route::resource('/shop-config',dashShopConfigController::class);
       Route::resource('/shop-status',dashShopStatusController::class);
    });

});