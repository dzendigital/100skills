<?php

namespace App\Http\Requests\Panel\Tarif;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            
            "title" => "required",
            
            "price_1" => "",
            "price_3" => "",

            "is_visible" => "",
            "sort" => "",

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => "Поле 'Заголовок' обязательно для заполнения.",
        ];
    }
}
