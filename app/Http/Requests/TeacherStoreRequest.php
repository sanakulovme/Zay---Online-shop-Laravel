<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
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
            'name' => 'required|min:3',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'img' => 'required|mimes:png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Ism familyangizni kiriting!',
            'phone' => 'Telefon raqamingizni kiriting!',
            'address' => 'Manzilingizni kiriting!',
            'email' => 'elektron pochta manzilingizni kiriting!',
            'img:required' => 'Suratni yuklang!',
            'img:mimes' => 'Surat formati PNG yoki JPG b\'lishi shart!',
        ];
    }
}
