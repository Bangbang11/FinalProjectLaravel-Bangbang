<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'id_category' => 'required',
            'name' => 'required',
            'company' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'salary' => 'required',
            'benefit' => 'required',
            'min_experience' => 'required',
            'description' => 'required',
            'photo' => 'required'
        ];
    }
}
