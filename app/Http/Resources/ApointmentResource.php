<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApointmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'description'         => $this->description,
            'status'              => $this->status,
            'appointmentType'     => $this->appointmentType ,
            'doctor_id'           => new AcountResource($this->doctor_id),
            'patient_id'          => new AcountResource($this->patient_id),
            'hospital_id'         => $this->hospital_id,

        ];
    }
}
