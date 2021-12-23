<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => 'min:5',
            'birthday' => 'required',
            'phone' => 'required',
            'avatar' => 'required|image',
            'role' => 'required',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Tên ít nhất 5 ký tự',
            'birthday.required' => 'Vui lòng nhập ngày sinh của bạn',
            'phone.required' => 'Số điện thoại không được để trống',
            'avatar.required' => 'Ảnh không được để trống',
            'avatar.image' => 'Ảnh không đúng định dạng',
            'role.required' => 'Role khong duoc de trong',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng'
        ];
    }
}
