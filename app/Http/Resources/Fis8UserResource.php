<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Fis8UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'email' => $this->email,
            'username' => $this->username,
            'name' => $this->name,
            'school' => $this->school,
            'city' => $this->city,
            'birthyear' => $this->birthyear,
            'myuser' => $this->myUser,
          ];
    }
}
