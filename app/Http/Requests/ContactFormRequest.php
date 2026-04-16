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
            'full_name' => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email', 'max:255'],
            'phone'     => ['required', 'string', 'max:20', 'regex:/^(\+62|62|0)[0-9]{8,15}$/'],
            'message'   => ['required', 'string', 'min:10', 'max:2000'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'full_name.required' => 'Nama lengkap wajib diisi.',
            'full_name.string'   => 'Nama lengkap harus berupa teks.',
            'full_name.max'      => 'Nama lengkap maksimal 255 karakter.',
            'email.required'     => 'Alamat email wajib diisi.',
            'email.email'        => 'Format email tidak valid.',
            'email.max'          => 'Email maksimal 255 karakter.',
            'phone.required'     => 'Nomor HP wajib diisi.',
            'phone.string'       => 'Nomor HP harus berupa teks.',
            'phone.max'          => 'Nomor HP maksimal 20 karakter.',
            'phone.regex'        => 'Format nomor HP tidak valid. Gunakan format Indonesia (contoh: 08123456789).',
            'message.required'   => 'Pesan wajib diisi.',
            'message.string'     => 'Pesan harus berupa teks.',
            'message.min'        => 'Pesan minimal 10 karakter.',
            'message.max'        => 'Pesan maksimal 2000 karakter.',
        ];
    }
}
