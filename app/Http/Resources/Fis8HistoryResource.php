<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Fis8HistoryResource extends JsonResource
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
            'id' => $this->id,
            'time_taken' => $this->time_taken,
            'sum_correct_answer' => $this->sum_correct_answer,
            'student' => $this->student,
            'question' => $this->questions,
            'created_at' => $this->created_at,
          ];
    }
}
