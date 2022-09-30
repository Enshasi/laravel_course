<?php

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


// get
// push
// delete
// put
// patch



