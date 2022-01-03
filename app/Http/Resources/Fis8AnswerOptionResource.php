<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Fis8AnswerOptionResource extends JsonResource
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
            'id' => $this->id,
            'option_text' => $this->option_text,
            'is_image' => $this->is_image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
          ];
    }
}
