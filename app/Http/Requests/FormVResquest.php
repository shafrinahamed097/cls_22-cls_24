<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormVResquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>'required|min:3|max:20|alpha|not_in:admin,password',
            'email'=>'required|email',
            'price'=>'nullable|numeric|min:10'
        ];
    }

    function messages(){
        return [
            'name.required'=>"Ekhane Name Obboshoi proyjon",
            'name.min'=>'Naam er minimum length hote hobe 3 ',
            'name.max'=>'Naam er maximum length 10 hobe'
        ];
    }
}
