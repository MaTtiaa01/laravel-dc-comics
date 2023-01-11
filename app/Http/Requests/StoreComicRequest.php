<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:comics|max:255|min:10',
            'description' => 'nullable|max:255|min:15',
            'thumb' => 'nullable|max:255',
            'price' => 'required|decimal:2|max:255',
            'series' => 'nullable|max:255',
            'sale_date' => 'nullable|max:255',
            'type' => 'nullable|max:255',
        ];
    }
}
