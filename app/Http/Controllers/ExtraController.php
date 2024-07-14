<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormVResquest;

class ExtraController extends Controller
{
    function checkValidation(FormVResquest $request,){
      
      

      $validated= $request->validated();

      return redirect(route('newform.get'))->with([
        'success'=>'Form Submitted Successfully',
        'name'=>$request->input('name'),
        'email'=>$request->input('email')
      ]);
 
   
 
    }
  }





















