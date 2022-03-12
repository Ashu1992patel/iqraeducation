<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            // 'name' => 'required|unique:courses|max:255',
            'name' => 'required|max:255',
            'thumbnail' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'requirement' => 'required',
            'period' => 'required|max:255',
            'duration' => 'required|max:255',
            'price' => 'required|max:255',
            'assessment' => 'required|max:255',
            'language' => 'required|max:255',
            'teacher' => 'required',
        ];
    }
}
