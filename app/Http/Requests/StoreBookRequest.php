<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'required|numeric',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Kitob nomi majburiy.',
            'title.string' => 'Kitob nomi faqat harflardan iborat bo‘lishi kerak.',
            'title.max' => 'Kitob nomi 255 ta belgidan oshmasligi kerak.',
            
            'author.required' => 'Muallif nomi majburiy.',
            'author.string' => 'Muallif nomi faqat harflardan iborat bo‘lishi kerak.',
            'author.max' => 'Muallif nomi 255 ta belgidan oshmasligi kerak.',
            
            'price.required' => 'Narx majburiy.',
            'price.numeric' => 'Narx faqat raqam bo‘lishi kerak.',
        ];
    }
}
