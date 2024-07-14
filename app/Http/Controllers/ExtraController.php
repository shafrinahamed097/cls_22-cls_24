<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormVResquest;

class ExtraController extends Controller
{
    function checkValidation(FormVResquest $request,){
      
      // $validation = $request->validate([
      //   'name'=>'required|min:3|max:20|alpha|not_in:admin',
      //   'email'=>'required|email',
      //   'price'=>'required|numeric|min:10',
      // ]);

      $validated= $request->validated();

      return redirect(route('newform.get'))->with([
        'success'=>'Form Submitted Successfully',
        'name'=>$request->input('name'),
        'email'=>$request->input('email')
      ]);
 
   
 
    }
  }





















