<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8Category extends Model
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
            ->orWhere('description', 'like', $term)
            ->orWhereHas('myUser', function ($query) use ($term) {
                $query->where('id', 'like', $term);
            });
        });
    }

    

    public function levels()
    {
        return $this->hasMany(Fis8Level::class, 'fis8_category_id');
    }
}
