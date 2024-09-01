<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LocationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'city'           => $this->city,
            'zip'            => $this->zip,
            'state'          => $this->state ,
            'country'        => $this->country,
            'address'        => $this->address,
        ];
    }
}
