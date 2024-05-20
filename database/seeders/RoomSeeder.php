<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Categorie::all();
        $hotels = Hotel::all();

        if ($categories->isEmpty() || $hotels->isEmpty()) {
            $this->command->info('No categories or hotels found, please run CategorieSeeder and HotelSeeder first.');
            return;
        }

        foreach ($categories as $categorie) {
            // Ensure there's at least one hotel
            $hotel = $hotels->random();
            $rooms = \App\Models\Room::factory(10)->create([
                'categorie_id' => $categorie->id,
                'hotel_id' => $hotel->id
            ]);
            $categorie->rooms()->saveMany($rooms);
        }
    }
}
