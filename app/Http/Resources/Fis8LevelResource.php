<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Fis8LevelResource extends JsonResource
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
            'name' => $this->name,
            'thumbnail' => $this->thumbnail,
            'description' => $this->description,
            'score_reward' => $this->score_reward,
            'ticket_reward' => $this->ticket_reward,
            'money_reward' => $this->money_reward,
            'maximum_time' => $this->maximum_time,
            'category' => $this->category,
          ];
    }
}
