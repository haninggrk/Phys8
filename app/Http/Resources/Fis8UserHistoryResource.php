<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Fis8UserHistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
         return [ //withlevel
            'levelId' => $this->id,
            'levelName' => $this->name,
            'questions' => $this->questions,
            'category' => $this->category,
            'userHistory' => $this->pivot,
         
          ];
    }
}
