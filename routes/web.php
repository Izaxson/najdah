<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectCategoryController;

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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::redirect('/', '/en');

Route::group(['prefix' => '{locale}', 'middleware' => 'setLocale'], function () {
   
    
    Route::get('/',[GallaryController::class,'slider'])->name('home');


    Route::get('/about-us', function () {
        return view('pages.about_us');
    })->name('about-us');
 

    Route::get('/contact-us', function () {
        return view('pages.contact');
    })->name('contact-us');

    
    Route::get('/portal', function () {
        return view('studentportal.portal');
    })->name('portal');
    Route::get('/members',[MemberController::class,'members'])->name('members');
    Route::get('/gallary',[GallaryController::class,'gallary'])->name('gallary');
    Route::get('/portfolio-details' ,[ProjectController::class,'details'])->name('portfolio-details');
    Route::get('/portfolio',[ProjectCategoryController::class,'category'])->name('portfolio');
    Route::get('/portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');
    Route::post('/message',[MessageController::class,'massage'])->name('message');
    

    });
    
    