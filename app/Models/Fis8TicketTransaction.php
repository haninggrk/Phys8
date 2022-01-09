<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8TicketTransaction extends Model
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
            ->orWhere('add_ticket', 'like', $term)
            ->orWhereHas('student', function ($query) use ($term) {
                $query->where('id', 'like', $term);
            });
        });
    }

    public const UPDATED_AT = null;

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
