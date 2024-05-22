<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('index');
});


Route::post('/',[FormController::class,'contact_form'])->name('contact_form');