<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', function () {
        return view('index');
    })->name('home');;


    Route::post('/', [FormController::class, 'contact_form'])->name('contact_form');

    Route::get('/polityka-prywatnosci', function () {
        return view('privacy-policy');
    })->name('privacy_policy');
});
