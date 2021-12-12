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
        return $this->belongsTo(Fis8Level::class, 'fis8_level_id');
    }

    public function answerOptionTexts()
    {
        return $this->belongsToMany(Fis8AnswerOptionText::class, 'fis8_question_answer_texts', 'fis8_question_id', 'fis8_answer_option_text_id')
        ->withPivot(['id', 'is_correct_answer', 'created_at', 'updated_at']);
    }

    public function imageQuestionAnswerImages()
    {
        return $this->belongsToMany(Fis8Image::class, 'fis8_question_answer_images', 'fis8_question_id', 'fis8_image_id')
        ->withPivot(['id', 'is_correct_answer', 'created_at', 'updated_at']);
    }

    public function images()
    {
        return $this->belongsToMany(Fis8Image::class, 'fis8_question_images', 'fis8_question_id', 'fis8_image_id')
        ->withPivot(['id', 'created_at', 'updated_at']);
    }

    public function histories()
    {
        return $this->belongsToMany(Fis8History::class, 'fis8_user_answers', 'fis8_question_id', 'fis8_history_id')
        ->withPivot(['id', 'user_answer', 'created_at']);
    }
}
