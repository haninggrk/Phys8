<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Fis8Category;
use App\Models\Fis8Level;

class Fis8QuestionResource extends JsonResource
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
            'level' => $this->level,
            'question_text' => $this->question_text,
            'is_image_answer' => $this->is_image_answer,
            'discussion' => $this->discussion,
          ];
    }
}
