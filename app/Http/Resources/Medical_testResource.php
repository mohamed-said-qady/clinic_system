<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Medical_testResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
            return [
                    'description'      => $this->description,
                    'name'             => $this->name,
                    'hospital_id'      => $this->hospital_id,
                    'patient_id'       => new AcountResource($this->patient_id),
                    'doctor_id'        => $this->doctor_id,
                    'completed'        => $this->completed,


        ] ;
    }
}
