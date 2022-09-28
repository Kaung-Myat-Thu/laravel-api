<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'max' => 255],
            'email' => ['required', 'max' => 20, 'email'],
            'designation' => ['required', 'max' => 20],
            'contact_no' => ['required', 'max' => 10, 'number'],
        ];
    }
}
