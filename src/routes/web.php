<?php

use Ahmad\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Ahmad\Contact\Http\Controllers'], function () {
    Route::get('contact',[ContactController::class,'index'])->name('contact');
    Route::post('contact',[ContactController::class,'send']);

});
