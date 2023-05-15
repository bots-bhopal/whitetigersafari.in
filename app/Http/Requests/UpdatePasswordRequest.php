<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
            'old_password' =>  'required',
            'password' =>  'required|string|min:8|confirmed',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                // 'roles.required'    => 'The roles field is required !!',
                'old_password.required' =>  'The old password field is required !!',
                'password.required' =>  'The password field is required !!',
                'confirmed' =>  'The password confirmation does not match !!',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                // 'roles.required'    => 'भूमिका फ़ील्ड आवश्यक है !!',
                'old_password.required' =>  'पुराना पासवर्ड फ़ील्ड आवश्यक है !!',
                'password.required' =>  'पासवर्ड फ़ील्ड आवश्यक है !!',
                'confirmed' =>  'पासवर्ड पुष्टिकरण मेल नहीं खाता !!',
            ];
        }
    }
}
