<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'hotel_id',
        'room_number',
        'categorie_id',
    ];
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
