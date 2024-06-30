<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function handleFormSubmission(Request $request)
    {
        // dd($request->all());
        // return $request->input("name");
        // return request()->input("name");

        $name = $request->input('name');
        $email = $request->input('email');

        if($request->has("profile_picture")){
            $file = $request->file('profile_picture');
            $file->store("uploads", "public");

        }
       


        // return [
        //     "name"=>$name,
        //     "email"=>$email
            
        // ];

        // return redirect(route("form.get"))->with([
        //     "success" => "Form submitted Successfully",
        //     "name" => $name,
        //     "email" =>$email
        // ]);

        return redirect(route("form.get"))->withError("Wrong Data");


        

    }
}
