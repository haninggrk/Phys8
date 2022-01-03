<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8AnswerOption extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function questions()
    {
        return $this->belongsToMany(Fis8Question::class, 'fis8_question_answers', 'fis8_answer_option_id', 'fis8_question_id')
        ->withPivot(['id', 'option', 'created_at', 'updated_at']);
    }
}
