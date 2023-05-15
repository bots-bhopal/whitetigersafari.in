<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'title' => 'required|max:255',
            'date' => 'required|date',
            'description' => 'required',
            'image' => 'image|required|mimes:jpeg,bmp,png,jpg',
            'images.*' => 'image|mimes:jpeg,bmp,png,jpg',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                'title.required' => 'The news title field is required !!',
                'date.required' => 'The news date field is required !!',
                'date' => 'The news date is not a valid date !!',
                'description.required' => 'The news description field is required !!',
                'image.required' => 'The image field is required !!',
                'image' => 'The image field must be an image !!',
                'image.mimes' => 'The image must be a file of type: :values.',
                'images.*.mimes' => 'The images must be a file of type: :values.',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                'title.required' => 'समाचार शीर्षक फ़ील्ड आवश्यक है !!',
                'date.required' => 'समाचार दिनांक फ़ील्ड आवश्यक है !!',
                'date' => 'समाचार दिनांक मान्य दिनांक नहीं है !!',
                'description.required' => 'समाचार विवरण फ़ील्ड आवश्यक है !!',
                'image.required' => 'इमेज़ फ़ील्ड आवश्यक है !!',
                'image' => 'इमेज़ फ़ील्ड एक इमेज़ होना चाहिए !!',
                'image.mimes' => 'इमेज़ प्रकार की एक फ़ाइल होनी चाहिए: :values.',
                'images.*.mimes' => 'इमेज़ प्रकार की एक फ़ाइल होनी चाहिए: :values.',
            ];
        }
    }
}
