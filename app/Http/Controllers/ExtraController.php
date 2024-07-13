<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormVRequest;

class ExtraController extends Controller
{
    function checkValidation(FormVRequest $request,){
 
   
  $validated=$request->validated();


  // print_r($validation)
  return redirect(route('from.get'))->with([
    'success'=>'Form Submitted Successfully',
    'name'=>$request->input('name'),
    'email'=>$request->input('email')
  ]);
}
}




















