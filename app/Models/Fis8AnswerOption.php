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

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('id', 'like', $term)
            ->orWhere('opinion_text', 'like', $term)
            ->orWhere('is_image', 'like', $term)
            ->orWhereHas('myUser', function ($query) use ($term) {
                $query->where('id', 'like', $term);
            });
        });
    }

    public function questions()
    {
        return $this->belongsToMany(Fis8Question::class, 'fis8_question_answers', 'fis8_answer_option_id', 'fis8_question_id')
        ->withPivot(['id', 'option', 'created_at', 'updated_at']);
    }
}
