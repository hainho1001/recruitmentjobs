<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserJobRequest extends FormRequest
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
            'phone' => 'required|min:10|numeric',
            'resume' => 'required|mimes:pdf|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.min' => 'Điện thoại phải có ít nhất 10',
            'resume.required' => 'Vui lòng chọn resume',
            'resume.mimes' => 'Vui lòng chọn tập tin đính kèm với định dạng .pdf, nhỏ hơn 2048KB'
        ];
    }
}
