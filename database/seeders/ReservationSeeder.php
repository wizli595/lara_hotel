<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = \App\Models\Client::all();
        $rooms = Room::all();

        // Check if there are rooms available
        if ($rooms->isEmpty()) {
            $this->command->info('No rooms found, please run RoomSeeder first.');
            return;
        }

        foreach ($clients as $client) {
            foreach (range(1, 10) as $index) {
                $room = $rooms->random();
                \App\Models\Reservation::factory()->create([
                    'client_id' => $client->id,
                    'room_id' => $room->id,
                ]);
            }
        }
    }
}
