<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8Log extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public const UPDATED_AT = null;

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('id', 'like', $term)
            ->orWhere('table_name', 'like', $term)
            ->orWhere('student_id', 'like', $term)
            ->orWhere('log_note', 'like', $term)
            ->orWhere('log_description', 'like', $term)
            ->orWhere('log_path', 'like', $term)
            ->orWhere('log_ip', 'like', $term)
            ->orWhereHas('student', function ($query) use ($term) {
                $query->where('id', 'like', $term);
            });
        });
    }
    
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
