<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'title' => 'required',
            'level' => 'required',
            'career' => 'required',
            'address' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'salary' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'title.required' =>'Vui lòng nhập Chức Danh',
            'level.required' =>'Vui lòng nhập Cấp Bậc',
            'career.required' =>'Vui lòng nhập Ngành Nghề',
            'address.required' =>'Vui lòng nhập Địa Điểm Làm Việc',
            'description.required' =>'Vui lòng nhập Mô Tả',
            'requirements.required' =>'Vui lòng nhập Yêu Cầu Công Việc',
            'salary.required' =>'Vui lòng nhập Mức lương',
            
        ];
    }
}
