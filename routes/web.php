<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ExtraController;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/loginform","forms.login");
Route::view("/form","forms.form")->name("form.get");
Route::view("/newform","forms.newform")->name("newform.get");
Route::view("/contact","forms.contact");


Route::post("/handleform",[FormController::class, 'handleFormSubmission'])->name("form.post");
Route::post("/handleform1",[ExtraController::class, 'checkValidation'])->name("form1.post");
