<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
          'title_en' => 'required',
          'title_ps' => 'required',
          'title_fa' => 'required',
          'excerpt_en' => 'required',
          'excerpt_ps' => 'required',
          'excerpt_fa' => 'required',
          'description_en' => 'required',
          'description_ps' => 'required',
          'description_fa' => 'required',
          'image' => 'nullable|image',
        ];
    }
}
