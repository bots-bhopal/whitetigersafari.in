<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTenderRequest extends FormRequest
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
            'file' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:4096',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                'title.required' => 'The title field is required !!',
                'date.required' => 'The date field is required !!',
                'date' => 'The date is not a valid date !!',
                'description.required' => 'The description field is required !!',
                'file.required' => 'The document file is required !!',
                'file' => 'The document must be a file.',
                'file.mimes' => 'The document must be a file of type: :values.',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                'title.required' => 'शीर्षक फ़ील्ड आवश्यक है !!',
                'date.required' => 'दिनांक फ़ील्ड आवश्यक है !!',
                'date' => 'दिनांक मान्य दिनांक नहीं है !!',
                'description.required' => 'विवरण फ़ील्ड आवश्यक है !!',
                'file.required' => 'दस्तावेज़ फ़ाइल फ़ील्ड आवश्यक है !!',
                'file' => 'दस्तावेज़ एक फ़ाइल होना चाहिए !!',
                'file.mimes' => 'दस्तावेज़ प्रकार की एक फ़ाइल होनी चाहिए: :values.',
            ];
        }
    }
}
