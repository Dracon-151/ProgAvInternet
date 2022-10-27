<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'name' => 'Suite de lujo',
            'capacity' => 3,
            'type' => 'Deluxe',
        ]);

        Room::create([
            'name' => 'Cuarto normal',
            'capacity' => 2,
            'type' => 'Standard',
        ]);
    }
}
