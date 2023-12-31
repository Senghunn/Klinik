<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/front', function () {
    return view('front_page');
});

Route::get('/',[FrontPageController::class,'index'])->name('front.page');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/services',[FrontPageController::class,'services'])->name('front.services');
Route::get('/feature',[FrontPageController::class,'feature'])->name('front.feature');
Route::get('/ourdoctor',[FrontPageController::class,'ourdoctor'])->name('front.ourdoctor');
Route::get('/appointment',[FrontPageController::class,'appointment'])->name('front.appointment');
Route::get('/testimonial',[FrontPageController::class,'testimonial'])->name('front.testimonial');
Route::get('/error',[FrontPageController::class,'error'])->name('front.error');
Route::get('/contact',[FrontPageController::class,'contact'])->name('front.contact');




