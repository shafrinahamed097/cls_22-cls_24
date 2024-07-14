<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\HelloController;
use App\Http\Middleware\ScrectMIddleware;


Route::get('/', function () {
    return view('welcome');
});

Route::view("/loginform","forms.login");
Route::view("/form","forms.form")->name("form.get");
Route::view("/newform","forms.newform")->name("newform.get");
Route::view("/contact","forms.contact");


Route::post("/handleform",[FormController::class, 'handleFormSubmission'])->name("form.post");
Route::post("/handleform1",[ExtraController::class, 'checkValidation'])->name("form1.post");

Route::get("/secret", function(){
    return "Secret Message";
})->middleware(ScrectMIddleware::class);

Route::get("/hello", function(){
    return "Hello World";
})->middleware(['throttle:2,1']);



Route::middleware(['throttle:2,1'])->group(function (){
    Route::get("/hello", [HelloController::class, "hello"]);
    Route::get("/hell2", [HelloController::class, "hello2"]);
});