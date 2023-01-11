<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
            'title' => ['required', 'max:255', 'min:10', Rule::unique('comics')->ignore($this->comic->id)],
            'description' => 'nullable|max:255|min:15',
            'thumb' => 'nullable|max:255',
            'price' => 'required|decimal:2|max:255',
            'series' => 'nullable|max:255',
            'sale_date' => 'nullable|max:255',
            'type' => 'nullable|max:255',
        ];
    }
}
