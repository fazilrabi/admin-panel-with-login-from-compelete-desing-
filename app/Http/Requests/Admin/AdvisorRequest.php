<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdvisorRequest extends FormRequest
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
          'name_en' => 'required',
          'name_ps' => 'required',
          'name_fa' => 'required',
          'title_en' => 'required',
          'title_ps' => 'required',
          'title_fa' => 'required',
          'bio_en' => 'required',
          'bio_ps' => 'required',
          'bio_fa' => 'required',
          'image' => 'nullable|image',
        ];
    }
}
