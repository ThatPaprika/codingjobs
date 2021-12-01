<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => 'required|max:30',
            'price' => 'required|numeric|between:2,100'
        ];
    }

    // Custom error message
    public function messages()
    {
        return [
            'title.required' => 'Title is mandatory !',
            'price.required' => 'Price is mandatory !',
            'price.numeric' => 'Price must be numeric and between 2 and 100€',
            'price.between' => 'Price must be numeric and between 2 and 100€',
        ];
    }
}
