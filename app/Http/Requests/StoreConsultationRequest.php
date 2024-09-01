<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsultationRequest extends FormRequest
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
            'online_appointment' => ['required'],
            'symptoms'           => ['required','string'],
            'user_id'            => ['required'],
            'request_status'     => ['required','string'],
            'start_at'           => ['required'],
            'acount_id'          => ['required','exists:acounts,id'] 
        ];
    }
}
