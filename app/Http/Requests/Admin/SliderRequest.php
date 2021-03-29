<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
          'title_en' => 'required|min:5',
          'title_fa' => 'required|min:5',
          'title_ps' => 'required|min:5',
          'subtitle_en' => 'required|min:5',
          'subtitle_fa' => 'required|min:5',
          'subtitle_ps' => 'required|min:5',
          'button_en' => 'nullable|min:2',
          'button_fa' => 'nullable|min:2',
          'button_ps' => 'nullable|min:2',
          'link' => 'nullable',
          'image' => 'nullable|image'
        ];
    }
}
