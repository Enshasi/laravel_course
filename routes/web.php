<?php

use App\Http\Controllers\FormsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SendMessageController;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\SiteController;
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



Route::prefix('site')->name('site.')->group(function(){
    Route::get('/' , [SiteController::class,'index'])->name('index');
    Route::get('/about' , [SiteController::class,'about'])->name('about');
    Route::get('/contact' , [SiteController::class,'contact'])->name('contact');
    Route::get('/post' , [SiteController::class,'post'])->name('post');
});

Route::prefix('site2')->name('site2.')->group(function(){
    Route::get('/' , [Site2Controller::class , 'index'])->name('index');
    Route::get('/experienc' , [Site2Controller::class , 'experienc'])->name('experienc');
    Route::get('/eduction' , [Site2Controller::class , 'eduction'])->name('eduction');
    Route::get('/skills' , [Site2Controller::class , 'skills'])->name('skills');
    Route::get('/interst' , [Site2Controller::class , 'interst'])->name('interst');
    Route::get('/awards' , [Site2Controller::class , 'awards'])->name('awards');
});

Route::get('form1' , [FormsController::class  , 'form1'])->name('form1');
Route::post('form1Data' , [FormsController::class  , 'form1_data'])->name('form1_data');


Route::get('form2' , [FormsController::class  , 'form2'])->name('form2');
Route::post('form2Data' , [FormsController::class  , 'form2_data'])->name('form2_data');

Route::get('form3' , [FormsController::class  , 'form3'])->name('form3');
Route::post('form3Data' , [FormsController::class  , 'form3_data'])->name('form3_data');

Route::get('form4' , [FormsController::class  , 'form4'])->name('form4');
Route::post('form4Data' , [FormsController::class  , 'form4_data'])->name('form4_data');

Route::get('sendMessage' , [SendMessageController::class , 'send']);

Route::get('contact-us' , [SendMessageController::class , 'contact_us']);
Route::post('contact-us' , [SendMessageController::class , 'contact_us_data'])->name('contact');


Route::prefix('posts')->name('post.')->group(function(){

    Route::get('/index' , [PostsController::class,'index'])->name('index');
});


