<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomRequest extends FormRequest
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
            'email' => 'required|email',
            'name' => 'required|string|max:20',
            'photo' => 'required|image|mimes:png,jpg,jpeg',
            'payment' => 'required',
            'credit-card-no' => 'max:10|required_if:payment,cc',
            'publish' => 'nullable|date',
            'start' => 'required|date|after:tomorrow',
            'password' => 'required'
        ];
    }
}
