<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|min:10|max:255|email',
            'subject' => 'required|string|min:3|max:255',
            'message' => 'required|string|min:10',
        ];
    }

    public function messages():array{
        return [
            'name.required' => 'Ad alanı zorunludur',
            'email.required' => 'Email alanı zorunludur',
            'subject.required' => 'Konu alanı zorunludur',
            'message.required' => 'Mesaj alanı zorunludur',

            'email.email' => 'Email alanı geçerli bir email adresi olmalıdır',
            'name.min' => 'Ad alanı en az 3 karakter olmalıdır',
            'name.max' => 'Ad alanı en fazla 255 karakter olmalıdır',
            'subject.min' => 'Konu alanı en az 3 karakter olmalıdır',
            'subject.max' => 'Konu alanı en fazla 255 karakter olmalıdır',
            'message.min' => 'Mesaj alanı en az 10 karakter olmalıdır',
        ];
    }
}
