<?php

namespace App\Http\Resources;

use App\Http\Resources\MediaCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'    => $this->id,
            'name'  => $this->name,
            'email' => $this->email,
            'passport_token' => $this->passport_token,
            'media' =>  new MediaCollection($this->whenLoaded('media'))
        ];
    }

    
}
