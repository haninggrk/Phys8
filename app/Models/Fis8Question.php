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

    public function answerOptions()
    {
        return $this->belongsToMany(Fis8AnswerOption::class, 'fis8_question_answers', 'fis8_question_id', 'fis8_answer_option_id')
        ->withPivot(['id', 'option', 'created_at', 'updated_at']);
    }

    public function quizHistories()
    {
        return $this->belongsToMany(Fis8QuizHistory::class, 'fis8_user_answers', 'fis8_question_id', 'fis8_quiz_history_id')
        ->withPivot(['id', 'user_answer', 'created_at']);
    }
}
