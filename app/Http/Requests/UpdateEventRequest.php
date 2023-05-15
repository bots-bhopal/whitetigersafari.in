<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'date' => 'required|date_format:Y-m-d',
            'time' => 'required|date_format:H:i',
            'place' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,bmp,png,jpg',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                'title.required' => 'The event title field is required !!',
                'date.required' => 'The event date field is required !!',
                'date' => 'The event date is not a valid date !!',
                'time.required' => 'The event time field is required !!',
                'time' => 'The event time is not a valid time !!',
                'place' => 'The event place field is required !!',
                'description.required' => 'The event description field is required !!',
                'image.required' => 'The image field is required !!',
                'image' => 'The image field must be an image !!',
                'image.mimes' => 'The image must be a file of type: :values.',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                'title.required' => 'कार्यक्रम शीर्षक फ़ील्ड आवश्यक है !!',
                'date.required' => 'कार्यक्रम दिनांक फ़ील्ड आवश्यक है !!',
                'date' => 'कार्यक्रम दिनांक मान्य दिनांक नहीं है !!',
                'time.required' => 'कार्यक्रम समय फ़ील्ड आवश्यक है !!',
                'time' => 'कार्यक्रम का समय मान्य समय नहीं है !!',
                'place' => 'कार्यक्रम स्थान फ़ील्ड आवश्यक है !!',
                'description.required' => 'कार्यक्रम विवरण फ़ील्ड आवश्यक है !!',
                'image.required' => 'इमेज़ फ़ील्ड आवश्यक है !!',
                'image' => 'इमेज़ फ़ील्ड एक इमेज़ होना चाहिए !!',
                'image.mimes' => 'इमेज़ प्रकार की एक फ़ाइल होनी चाहिए: :values.',
            ];
        }
    }
}
