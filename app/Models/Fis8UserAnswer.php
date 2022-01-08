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
            ->orWhere('question_text', 'like', $term)
            ->orWhere('correct_answer_option', 'like', $term)
            ->orWhere('discussion', 'like', $term)
            ->orWhereHas('user', function ($query) use ($term) {
                $query->where('id', 'like', $term);
            });
        });
    }

    public const UPDATED_AT = null;
}
