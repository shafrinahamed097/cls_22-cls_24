<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormVRequest extends FormRequest
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
            
            'name'=>'required|min:3|max:30|alpha|not_in:admin',
            'email'=>'required|email',
            'price'=>'required|numeric|min:10',
        ];
    }
}
