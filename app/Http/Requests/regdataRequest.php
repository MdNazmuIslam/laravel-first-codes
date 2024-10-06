<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class regdataRequest extends FormRequest
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
            'name'=>'required|string|',
            'email'=>'required|email|min:7|max:40',
            'class'=>'numeric|min:1|max:15|min:5|max:15',
            'subject'=>'string|alpha:ascii|min:3|max:30',
            'number'=>'required|numeric|min_digits:4|max_digits:14',
            'age'=>'numeric |min:18|max:100|min_digits:1|max_digits:2',
            'city'=>'string|alpha:ascii|min:2|max:56',
            'cuntry'=>'string||min:3|max:30',
            'address'=>'required|string|min:5|max:156',
            'postCode'=>'numeric|min_digits:1|max_digits:5',
            'message'=>'required|string|min:10|max:256',
            
        
        ];
    }

    public function messages()
    {
        return[
            'message.required' => 'Please write a message',
            'message.min' => 'Please write a message minimum 10 word'
        ];
    }
 protected $stopOnFirstFailure = true;

    
}
