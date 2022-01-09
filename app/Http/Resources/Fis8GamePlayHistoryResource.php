<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Fis8GamePlayHistoryResource extends JsonResource
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
            'sum_correct_answer' => $this->sum_correct_answer,
            'score' => $this->score,
            'money_reward' => $this->money_reward,
            'ticket_reward' => $this->ticket_reward,
            'student' => $this->student,
            'question' => $this->questions,
            'created_at' => $this->created_at,
          ];
    }
}
