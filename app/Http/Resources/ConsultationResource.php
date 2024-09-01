<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConsultationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'online_appointment'      => $this->online_appointment,
            'symptoms'                => $this->symptoms,
            'user_id'                 => $this->user_id ,
            'request_status'          => $this->request_status,
            'start_at'                => $this->start_at,
            'acount_id'               => $this->acount_id,

        ];
    }
}
