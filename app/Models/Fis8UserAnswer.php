<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8UserAnswer extends Model
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
            ->orWhere('fis8_question_id', 'like', $term)
            ->orWhere('fis8_game_play_history_id', 'like', $term)
            ->orWhere('user_answer', 'like', $term);
        });
    }

    public const UPDATED_AT = null;
}
