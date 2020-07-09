<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
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
            'name' => 'required',
            'career' => 'required',
            'address' => 'required',
            'profile' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Vui lòng nhập Tên Công Ty',
            'career.required' =>'Vui lòng nhập Ngành Nghề',
            'address.required' =>'Vui lòng nhập Địa Chỉ',
            'profile.required' =>'Vui lòng nhập Sơ Lược Về Công Ty',
            
        ];
    }
}
