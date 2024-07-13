<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormVRequest;

class ExtraController extends Controller
{
    function checkValidation(Request $request,){
      return redirect(route('newform.get'))->with([
        'success'=>'Form Submitted Successfully',
        'name'=>$request->input('name'),
        'email'=>$request->input('email')
      ]);
 
   
 
    }
  }





















