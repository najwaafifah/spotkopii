<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['cafe_id', 'nama_reviewer', 'rating', 'review_text'];

    public function cafe()
    {
        return $this->belongsTo(Cafe::class);
    }
}
