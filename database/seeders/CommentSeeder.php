<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Comment;
use App\Models\Hotel;
use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservations = Reservation::all();
        $hotels = Hotel::all();
        $clients = Client::all();

        // Seed comments for reservations
        foreach ($reservations as $reservation) {
            Comment::factory(5)->create([
                'commentable_id' => $reservation->id,
                'commentable_type' => Reservation::class,
            ]);
        }

        // Seed comments for hotels
        foreach ($hotels as $hotel) {
            Comment::factory(5)->create([
                'commentable_id' => $hotel->id,
                'commentable_type' => Hotel::class,
            ]);
        }

        // Seed comments for clients
        foreach ($clients as $client) {
            Comment::factory(5)->create([
                'commentable_id' => $client->id,
                'commentable_type' => Client::class,
            ]);
        }
    }
}
