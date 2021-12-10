<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8AnswerOptionImage extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function image()
    {
        return $this->belongsTo(Fis8Image::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Fis8Question::class, 'fis8_question_answer_images', 'fis8_answer_option_image_id', 'fis8_question_id')
        ->withPivot(['id', 'is_correct_answer', 'created_at', 'updated_at']);
    }
}
