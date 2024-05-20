<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'room_id',
        'checkin',
        'checkout',
        'paymen_date',
        'total',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
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
