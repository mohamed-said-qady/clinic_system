<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'first_name'         => $this->first_name,
            'last_name'          => $this->last_name,
            'sex'                => $this->sex,
            'birthdate'          => $this->birthdate,
            'phone'              => $this->phone,
            'allergies'          => $this->allergies,
            'prefHospital'       => $this->prefHospital,
            'PrimaryCareDoctorId'=> $this->PrimaryCareDoctorId,
        ];
    }
}