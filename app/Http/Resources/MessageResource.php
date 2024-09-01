<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'header'      => $this->header,
            'body'        => $this->body,
            'target_id'   => $this->target_id,
            'doctor_id'   => $this->doctor_id,
        ];
    }
}
