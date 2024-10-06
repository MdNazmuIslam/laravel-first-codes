<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactForm extends FormRequest
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
            'name' => 'required | string | max:56|min:3',
            'email' => 'required | email | max:56|min:7',
            'subject' => 'required | string | max:56|min:7',
            'message' => 'required | string | max:250|min:10',
            'attacment' => ' required| mimes:jpg,png,pdf,docx,doc|max:4096',
        ];
    }
}
