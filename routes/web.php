<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;    
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\CourseController;
 use App\Http\Controllers\BannerController;
 use App\Http\Controllers\SocialController;
 use App\Http\Controllers\CustomerController;
 use App\Http\Controllers\ContactusController;
 use App\Http\Controllers\AboutController;
 use App\Models\about;
 use App\Models\Banner;
 use App\Models\company;
 use App\Models\contactus;
 use App\Models\Course;
 use App\Models\customer;
 use App\Models\member;
 use App\Models\social;
 use App\Models\user;
 use App\Models\abouts;
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
    // $about=about::first();
    $banner=Banner::all();
    $about=about::all();
    $contactus=contactus::all();
    $course=Course::all();
    $customer=customer::all();
    $social=social::all();

    return view('welcome',['banner'=>$banner,'course'=>$course ,'social'=>$social ,'contactus'=>$contactus,'about'=>$about]);
});
// Route::get('/',[HomeController::class,'welcome']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/memberform', [App\Http\Controllers\HomeController::class,'memberform'])->name('memberform');
// Route::get('/memberadd', function(){ return view('memberadd'); })->name('memberadd');
// Route::post('/pratyush', [Controller::class,'pratyush'])->name('pratyush');


// course start 
Route::get('/course', function(){ return view('add_course'); })->name('course');/* to form page */
Route::post('addcourse',[CourseController::class, 'addcourses'])->name('addcourse'); /*submit data in database */
Route::get('/courselist', function(){ return view('courselist'); })->name('courselist'); /* listing page */
Route::get('/editcourse{id}',[CourseController::class,'editcourse'])->name('editcourse'); /**on click edit page */
Route::post('updatecourse{id}',[CourseController::class,'updatecourse'])->name('updatecourse');/**on click  update course data */
// course End


// banner start
Route::get('/baner',[BannerController::class,'banner'])->name('baner');
Route::post('/addbanner',[BannerController::class,'addbanner'])->name('addbanner');
Route::get('bannerlist',function(){return view('bannerlist');})->name('bannerlist');
Route::get('editbanner{id}',[BannerController::class,'editbanner'])->name('editbanner');
Route::post('updatebanner{id}',[BannerController::class,'updatebanner'])->name('updatebanner');
//banner end

//soial media
Route::get('/social', [SocialController::class,'addsocial'])->name('addsocial');
Route::get('editsocial{id}',[SocialController::class,'editsocial'])->name('editsocial');
Route::post('updatesocial{id}',[SocialController::class,'updatesocial'])->name('updatesocial');
// end social

//start member
Route::get('addcustomer',[CustomerController::class,'addcustomer'])->name('addcustomer');
Route::post('pratyush',[CustomerController::class,'pratyush'])->name('pratyush');
Route::get('listmem',[CustomerController::class,'listmem'])->name('listmem');
Route::get('editcustomer{id}',[CustomerController::class,'editcustomer'])->name('editcustomer');
Route::post('updatecustomer{id}',[CustomerController::class,'upadatecustomer'])->name('updatecustomer');
Route::get('memberdetails{id}',[CustomerController::class,'memberdetails'])->name('memberdetails');
//end member

//contact us
Route::post('contactus',[ContactusController::class,'addcontact'])->name('addcontact');

//about_me
Route::get('aboutme',function(){
    $about=about::all();
    return view('aboutme',['about'=>$about]);
})->name('aboutme');

Route::get('updateaboutme{id}',[AboutController::class,'updateabout'])->name('updteabout');
Route::post('aboutlistupdate{id}',[AboutController::class,'aboutlistupdate'])->name('aboutlistupdate');