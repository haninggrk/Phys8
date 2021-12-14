<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Fis8AnswerOptionTextResource extends JsonResource
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
            'answer_option_text' => $this->answer_option_text,
            'question_answer_text' => $this-> questions,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
          ];
    }
}
