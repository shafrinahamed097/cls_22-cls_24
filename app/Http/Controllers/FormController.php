<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

class FormController extends Controller
{
    function handleFormSubmission(Request $request)
    {
        // dd($request->all());
        // return $request->input("name");
        // return request()->input("name");
    //    Validate only image
    $request->validate([
        'profile_picture' =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // check validation error
        if($request->fails()){
            return redirect(route("form.get"))->withErrors($request->errors());
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $path = "";

        if($request->has("profile_picture")){
            $file = $request->file('profile_picture');
            $name = $file->getClientOriginalName();
         $uploadPath =   $file->storeAs("uploads", $name, "public");
            $path = Storage::url($uploadPath);

        }

   
       


        // return [
        //     "name"=>$name,
        //     "email"=>$email
            
        // ];

        return redirect(route("form.get"))->with([
            "success" => "Form submitted Successfully",
            "name" => $name,
            "email" =>$email,
            "profile_picture" => $path,
        ]);

        // return redirect(route("form.get"))->withError("Wrong Data");


        

    }
}
