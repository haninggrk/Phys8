<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8Level extends Model
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
            ->orWhere('name', 'like', $term)
            ->orWhere('thumbnail', 'like', $term)
            ->orWhere('description', 'like', $term)
            ->orWhere('score_reward', 'like', $term)
            ->orWhere('ticket_reward', 'like', $term)
            ->orWhere('money_reward', 'like', $term)
            ->orWhere('maximum_time', 'like', $term)
            ->orWhereHas('category', function ($query) use ($term) {
                $query->where('id', 'like', $term);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Fis8Category::class, 'fis8_category_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany(Fis8Question::class, 'fis8_level_id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'fis8_game_play_histories', 'fis8_level_id', 'student_id')
        ->withPivot(['id', 'score', 'money_reward', 'ticket_reward', 'sum_correct_answer', 'created_at']);
    }
}
