<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'  => 'required|min:3|max:20',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ];
    }
    public function messages() {
        return [
            'name.required'   => 'Vui lòng nhập họ và tên',
            'name.min'        => 'Tên tối thiểu 3 ký tự',
            'name.max'        => 'Tên tối đã 20 ký tự',
            'email.required'  => 'Vui lòng nhập email',
            'email.email'     => 'Email không đúng định dạng',
            'phone.required'  => 'Vui lòng nhập số điện thoại',
            'name.numeric'    => 'Vui lòng nhập đúng số',
        ];
    }
}
