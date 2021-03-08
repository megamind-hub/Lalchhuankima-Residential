<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\forwarderController;
use App\Http\Controllers\CircleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\MandalController;
use App\Http\Controllers\MailController;

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

Route::view('/', 'welcome');
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::post("forms",[FormController::class,'getData']);





Route::get('/login/csc', [LoginController::class, 'showcscLoginForm']);
Route::get('/login/forwarder', [LoginController::class, 'showforwarderLoginForm']);
Route::get('/login/circle_officer', [LoginController::class, 'showcircle_officerLoginForm']);
Route::get('/login/mandal_officer', [LoginController::class, 'showmandal_officerLoginForm']);

Route::get('/register/csc', [RegisterController::class,'showcscRegisterForm']);
Route::get('/register/forwarder', [RegisterController::class,'showforwarderRegisterForm']);
Route::get('/register/circle_officer', [RegisterController::class,'showcircle_officerRegisterForm']);
Route::get('/register/mandal_officer', [RegisterController::class,'showmandal_officerRegisterForm']);

Route::post('/login/csc', [LoginController::class,'cscLogin']);
Route::post('/login/forwarder', [LoginController::class,'forwarderLogin']);
Route::post('/login/circle_officer', [LoginController::class,'circle_officerLogin']);
Route::post('/login/mandal_officer', [LoginController::class,'mandal_officerLogin']);

Route::post('/register/csc', [RegisterController::class,'createcsc']);
Route::post('/register/forwarder', [RegisterController::class,'createforwarder']);
Route::post('/register/circle_officer', [RegisterController::class,'createcircle_officer']);
Route::post('/register/mandal_officer', [RegisterController::class,'createmandal_officer']);

Route::group(['middleware' => 'auth:csc'], function () {
    Route::view('/csc', 'cscHome');
});

Route::group(['middleware' => 'auth:forwarder'], function () {
    Route::view('/forwarder', 'forwarder');
});

Route::group(['middleware' => 'auth:circle_officer'], function () {
    Route::view('/circle_officer', 'circle_officer');
});

Route::group(['middleware' => 'auth:mandal_officer'], function () {
    Route::view('/mandal_officer', 'mandal_officer');
});


Route::get('logout', [LoginController::class,'logout']);


Route::view('formpage','csc');

Route::get('/search',[StatusController::class,'search']);
Route::get('/HomeSearch',[StatusController::class,'HomeSearch']);
Route::view('YourStat','YourStat');

Route::get('cscStatus',[StatusController::class,'index']);
Route::get('forwarder', [forwarderController::class,'index']);
Route::get('/forwarderData/{id}',[forwarderController::class,'forwarderData']);


// Route::get('files1/{{id}}',[forwarderController::class,'show']);
// Route::get('file/download/{file1}',[forwarderController::class,'download']);
Route::post('/status/{id}',[forwarderController::class,'update']);
Route::post('/stat/{id}',[forwarderController::class,'update1']);
Route::get('circle_officer',[forwarderController::class,'circleView']);


Route::get('/circleData/{id}', [CircleController::class,'circleData']);

Route::post('/status2/{id}',[CircleController::class,'status']);
Route::post('/statuss2/{id}',[CircleController::class,'status1']);

Route::get('/mandal_officer', [CircleController::class,'mandalView']);
Route::get('/mandalData/{id}', [MandalController::class,'mandalData']);

Route::post('/status3/{id}',[MandalController::class,'statuss']);
Route::post('/statuss3/{id}',[MandalController::class,'statuss1']);



Route::get('/download1/{id}',[forwarderController::class,'download1']);
Route::get('/download2/{id}',[forwarderController::class,'download2']);
Route::get('/download3/{id}',[forwarderController::class,'download3']);

Route::get('/download4/{id}',[CirCleController::class,'download4']);
Route::get('/download5/{id}',[CirCleController::class,'download5']);
Route::get('/download6/{id}',[CirCleController::class,'download6']);

Route::get('/download7/{id}',[MandalController::class,'download7']);
Route::get('/download8/{id}',[MandalController::class,'download8']);
Route::get('/download9/{id}',[MandalController::class,'download9']);


Route::get('ack/{id}',[StatusController::class,'mypdf']);

Route::get('/acknowledgement/{id}',[StatusController::class,'acknowledgement']);
Route::get('/certificate/{id}',[StatusController::class,'certificate']);

