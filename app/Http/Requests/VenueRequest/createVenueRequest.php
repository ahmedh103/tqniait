<?php

namespace App\Http\Requests\VenueRequest;

use App\Http\Traits\JsonValidationTrait;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class createVenueRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required||unique:venues,name',
            'description'=>'required',
            'address'=>'required',
            'phone'=>'required|numeric|min:10',
            'image'=>'required',
            'city'=>'required',
            'facebook_link'=>'nullable'
            

        ];
        
    }


    public function failedValidation(Validator $validator)

    {

        throw new HttpResponseException(response()->json([

            'success'   => false,

            'message'   => 'Validation errors',

            'data'      => $validator->errors()

        ]));

    }
    
}
