<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAcountRequest extends FormRequest
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
            'name'              => ['nullable','string'],
            'password'          => ['nullable'],
            'email'             => ['nullable','email'],
            'specialisity_id'   => ['nullable','exists:specialisities,id'],
            'description'       => ['nullable','in:patient,doctor,admin,lab,chemist'],
            'user_id'           => ['nullable'],
            'archieved'         => ['nullable'],
        ];
    }
}
