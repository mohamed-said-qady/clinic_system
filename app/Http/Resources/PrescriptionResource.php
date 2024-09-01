<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PrescriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'medication'               => $this->medication,
            'instruction'              => $this->instruction,
            'diagonsis'                => $this->diagonsis,
            'active'                   => $this->active,
            'medicine_potency'         => $this->medicine_potency,
            'remarks'                  => $this->remarks,
            'lab_test'                 => $this->lab_test,
            'prescription_delivered'   => $this->prescription_delivered,
            'lab_requests_performed'   => $this->lab_requests_performed,
            'invoice_amount'           => $this->invoice_amount,
        ];
    }
}
