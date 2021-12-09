<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8Question extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function level()
    {
        return $this->belongsTo(Fis8Level::class);
    }

    public function answerOptionTexts()
    {
        return $this->belongsToMany(Fis8AnswerOptionText::class, 'fis8_question_answer_texts', 'fis8_question_id', 'fis8_answer_option_text_id')
        ->withPivot(['id', 'is_correct_answer', 'created_at', 'updated_at']);
    }

    public function answerOptionImages()
    {
        return $this->belongsToMany(Fis8AnswerOptionImage::class, 'fis8_question_answer_images', 'fis8_question_id', 'fis8_answer_option_image_id')
        ->withPivot(['id', 'is_correct_answer', 'created_at', 'updated_at']);
    }

    public function images()
    {
        return $this->belongsToMany(Fis8Image::class, 'fis8_question_images', 'fis8_question_id', 'fis8_image_id')
        ->withPivot(['id', 'created_at', 'updated_at']);
    }
}
