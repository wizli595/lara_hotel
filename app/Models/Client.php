<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'address',
        'user_id',
        'city',
        'cp',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
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
