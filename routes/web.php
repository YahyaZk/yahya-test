<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontrollers;
use App\Http\Controllers\Site1controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\MailController;


Route::get('/',[Site2Controller::class,'index'])->name('index');

Route::prefix('site2')->name('site2')->group(function(){

    //   Route::get('/',[Site2Controller::class,'index'])->name('index');
      Route::get('/about',[Site2Controller::class,'about'])->name('about');
      Route::get('/contact',[Site2Controller::class,'contact'])->name('contact');
      Route::get('/post',[Site2Controller::class,'post'])->name('post');
});


Route::get('form1',[FormsController::class,'form1'])->name('form1');
Route::post('form1',[FormsController::class,'form1_data'])->name('form1_data');

Route::get('form2',[FormsController::class,'form2'])->name('form2');
Route::post('form2',[FormsController::class,'form2_data'])->name('form2_data');


Route::get('form3',[FormsController::class,'form3'])->name('form3');
Route::post('form3',[FormsController::class,'form3_data'])->name('form3_data');

Route::get('form4',[FormsController::class,'form4'])->name('form4');
Route::post('form4',[FormsController::class,'form4_data'])->name('form4_data');

Route::get('send-mail',[MailController::class,'send']);

Route::get('contact-us',[MailController::class,'contact_us']);
Route::post('contact-us',[MailController::class,'contact_us_data'])->name('contact_us');
Route::get('cart',[CartController::class,'cari'])->name('cart');
