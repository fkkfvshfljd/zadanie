<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'phone' => 'required|min:11|max:12',
            'email' => 'required|email',
            'subject' => 'min:10'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'phone.required' => 'Поле телефон является обязательным',
            'email.required' => 'Поле email является обязательным',
            'subject.min' => 'Сообщение должен сождержать не меньше 10 символов!'
        ];
    }
}
