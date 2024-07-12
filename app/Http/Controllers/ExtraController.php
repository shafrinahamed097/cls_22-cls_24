<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    function checkValidation(Request $request){
        return redirect(route('form.get'))->with([
            'success'=>'Form Submitted Successfully',
            'name'=>$request->input('name'),
            'email'=>$request->input('email')
        ]);
    }
}
