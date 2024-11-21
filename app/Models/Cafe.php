<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'jam_buka', 'jam_tutup', 'deskripsi'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
