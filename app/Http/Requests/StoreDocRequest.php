<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocRequest extends FormRequest
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
            // 'image' => 'image|required|mimes:jpeg,bmp,png,jpg',
            'file' => 'required|mimes:pdf,doc,docx|max:4096',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                'title.required' => 'The title field is required !!',
                'image.required' => 'The image field is required !!',
                // 'image' => 'The image field must be an image !!',
                // 'image.mimes' => 'The image must be a file of type: :values.',
                'file.required' => 'The document file is required !!',
                'file' => 'The document must be a file.',
                'file.mimes' => 'The document must be a file of type: :values.',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                'title.required' => 'शीर्षक फ़ील्ड आवश्यक है !!',
                'image.required' => 'इमेज़ फ़ील्ड आवश्यक है !!',
                // 'image' => 'इमेज़ फ़ील्ड एक इमेज़ होना चाहिए !!',
                // 'image.mimes' => 'इमेज़ प्रकार की एक फ़ाइल होनी चाहिए: :values.',
                'file.required' => 'दस्तावेज़ फ़ाइल फ़ील्ड आवश्यक है !!',
                'file' => 'दस्तावेज़ एक फ़ाइल होना चाहिए !!',
                'file.mimes' => 'दस्तावेज़ प्रकार की एक फ़ाइल होनी चाहिए: :values.',
            ];
        }
    }
}
