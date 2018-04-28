<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserInformationsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $userId = auth()->user()->id;

        return [
            'name' => 'required|string|unique:users,name,' . $userId,
            'email' => 'required|email|unique:users,email,' . $userId,
            'facebook' => 'string',
            'twitter' => 'string',
        ];
    }
}
