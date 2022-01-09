<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Fis8QuestionResource extends JsonResource
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
            'question_text' => $this->question_text,
            'correct_answer_option' => $this->correct_answer_option,
            'discussion' => $this->discussion,
            'level' => $this->level,
            'answer_option' => $this->answerOptions,
            'game_play_histories' => $this->gamePlayHistories,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
          ];
    }
}
