<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use User;

class UserRequest extends FormRequest
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
        $id = $this->user;
        return [
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required|min:8|confirmed',
            'password_confirmation'=> 'required|min:8|same:password',
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' =>'required|before:-17 years'
        ];
    }
}
