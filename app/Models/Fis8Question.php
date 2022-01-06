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

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('id', 'like', $term)
            ->orWhere('question_text', 'like', $term)
            ->orWhere('correct_answer_option', 'like', $term)
            ->orWhere('discussion', 'like', $term)
            ->orWhereHas('level', function ($query) use ($term) {
                $query->where('id', 'like', $term);
            });
        });
    }

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
