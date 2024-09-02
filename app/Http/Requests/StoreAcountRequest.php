<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAcountRequest extends FormRequest
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
            'name'              => ['required','string'],
            'password'          => ['required'],
            'email'             => ['required','email'],
            'specialisity_id'   => ['required','exists:specialisities,id'],
            'description'       => ['required','in:Patient,Doctor,Admin,Lab,Chemist'],
            'user_id'           => ['required'],
            'archieved'         => ['required'],
        ];
    }
}
