<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = \App\Models\Hotel::all();
        $reservations = \App\Models\Reservation::all();
        $clients = \App\Models\Client::all();
        foreach ($hotels as $hotel) {
            \App\Models\Like::factory(5)->create([
                'likeable_id' => $hotel->id,
                'likeable_type' => \App\Models\Hotel::class,
            ]);
        }
        foreach ($reservations as $reservation) {
            \App\Models\Like::factory(5)->create([
                'likeable_id' => $reservation->id,
                'likeable_type' => \App\Models\Reservation::class,
            ]);
        }
        foreach ($clients as $client) {
            \App\Models\Like::factory(5)->create([
                'likeable_id' => $client->id,
                'likeable_type' => \App\Models\Client::class,
            ]);
        }
    }
}
