<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AcountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return 
        [
            'name'        => $this->name,
            'email'       => $this->email,
            'pssword'     => $this->pssword ,
            'description' => $this->description,
            'user_id'     => $this->user_id ,
            'archeived'   => $this->archieved
        ];
    }
}
