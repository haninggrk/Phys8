<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8QuizHistory extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public const UPDATED_AT = null;

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function questions()
    {
        return $this->belongsToMany(Fis8Question::class, 'fis8_user_answers', 'fis8_quiz_history_id', 'fis8_question_id')
        ->withPivot(['id', 'user_answer', 'created_at']);
    }
}
