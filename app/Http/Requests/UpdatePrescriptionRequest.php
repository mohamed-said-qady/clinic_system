<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePrescriptionRequest extends FormRequest
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
            'medication'                 => ['nullable'],
            'instruction'                => ['nullable','string'],
            'active'                     => ['nullable',boolean],
            'diagonsis'                  => ['nullable'],
            'medicine_potency'           => ['nullable','numaric'],
            'remarks'                    => ['nullable','string'],
            'lab_test'                   => ['nullable'],
            'prescription_delivered'     => ['nullable'],
            'lab_requests_performed'     => ['nullable'],
            'lab_requests_performed'     => ['nullable'],
            'acount_id'                  => ['nullable']
        ];      
    }
}
