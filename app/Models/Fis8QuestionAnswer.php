<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8QuestionAnswer extends Model
{
    use HasFactory;

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('id', 'like', $term)
            ->orWhere('option', 'like', $term)
            ->orWhere('fis8_question_id', 'like', $term)
            ->orWhere('fis8_answer_option_id', 'like', $term);
        });
    }

    protected $guarded = [
        'id',
    ];
}
