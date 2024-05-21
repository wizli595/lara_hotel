<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'namehotel',
        'address',
        'phone',
        'cph',
        'stars',
    ];
    protected $primaryKey = 'idhotel';
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
