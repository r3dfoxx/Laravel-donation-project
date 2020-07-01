<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name' => 'required|name|not Null|max:200',
            'email' => 'required|email|unique|max:255',
            'amount' => 'required|amount|not Null',
            'message' => 'required|message|max:255',
        ];
    }
}
