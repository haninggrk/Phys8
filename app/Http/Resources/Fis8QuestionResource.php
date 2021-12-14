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
            'is_image_answer' => $this->is_image_answer,
            'discussion' => $this->discussion,
            'level' => $this->level,
            'question_answer_image' => $this->imageQuestionAnswerImages,
            'answer_option_text' => $this->answerOptionTexts,
            'history' => $this->histories,
            'question_image' => $this->images,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
          ];
    }
}
