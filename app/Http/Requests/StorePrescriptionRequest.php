<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrescriptionRequest extends FormRequest
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
            'medication'                 => ['required'],
            'instruction'                => ['required','string'],
            'active'                     => ['required'],
            'diagonsis'                  => ['required'],
            'medicine_potency'           => ['required','numeric'],
            'remarks'                    => ['required','string'],
            'lab_test'                   => ['required'],
            'prescription_delivered'     => ['required'],
            'lab_requests_performed'     => ['required'],
            'lab_requests_performed'     => ['required'],
            'acount_id'                  => ['required','exists:acounts,id']

        ];
    }

    
        
    
}
