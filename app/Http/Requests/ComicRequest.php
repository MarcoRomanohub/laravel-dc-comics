<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:50',
            'price' => 'required|min:2|max:255',
            'series' => 'required|min:1|max:255',
            'sale_date' => 'required|min:3|max:20',
            'type' => 'required|min:2|max:20',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo deve contenere non più di :max caratteri',
            'thumb.max' => 'Il campo thumb deve contenere non più di  :max caratteri',
            'price.required' => 'Il campo price è un campo obbligatorio',
            'price.min' => 'Il campo price deve contenere almeno :min caratteri',
            'price.max' => 'Il campo price deve contenere non più di :max caratteri',
            'series.required' => 'Il campo series è un campo obbligatorio',
            'series.min' => 'Il campo series deve contenere almeno :min caratteri',
            'series.max' => 'Il campo series deve contenere non più di :max caratteri',
            'sale_date.required' => 'Il campo sale_date è un campo obbligatorio',
            'sale_date.min' => 'Il campo sale_date deve contenere almeno :min caratteri',
            'sale_date.max' => 'Il campo sale_date deve contenere non più di :max caratteri',
            'type.required' => 'Il campo type è un campo obbligatorio',
            'type.min' => 'Il campo type deve contenere almeno :min caratteri',
            'type.max' => 'Il campo type deve contenere non più di :max caratteri',
        ];
    }
}
