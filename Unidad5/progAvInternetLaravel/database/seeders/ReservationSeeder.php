<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::create([
            'client_id' => 1,
            'start_date' => "2022-10-26",
            'end_date' => "2022-10-28",
            'room_id' => 1,
            'total' => 1500,
            'status' => 'Activo',
            'is_paid' => true,
        ]);

        Reservation::create([
            'client_id' => 1,
            'start_date' => "2022-10-26",
            'end_date' => "2022-10-28",
            'room_id' => 2,
            'total' => 1500,
            'status' => 'Activo',
            'is_paid' => true,
        ]);

        Reservation::create([
            'client_id' => 2,
            'start_date' => "2022-10-26",
            'end_date' => "2022-10-28",
            'room_id' => 1,
            'total' => 1500,
            'status' => 'Activo',
            'is_paid' => true,
        ]);

        Reservation::create([
            'client_id' => 2,
            'start_date' => "2022-10-26",
            'end_date' => "2022-10-28",
            'room_id' => 2,
            'total' => 1500,
            'status' => 'Activo',
            'is_paid' => true,
        ]);
    }
}
