<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminPasswordRequest extends FormRequest
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
            'password' =>  'required|string|min:8|confirmed',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                'password.required' =>  'The password field is required !!',
                'confirmed' =>  'The password confirmation does not match !!',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                'password.required' =>  'पासवर्ड फ़ील्ड आवश्यक है !!',
                'confirmed' =>  'पासवर्ड पुष्टिकरण मेल नहीं खाता !!',
            ];
        }
    }
}
