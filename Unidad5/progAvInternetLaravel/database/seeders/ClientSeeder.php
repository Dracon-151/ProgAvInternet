<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name' => "Alexis Alvarado",
            'phone_number' => "6122193138",
            'email' => "deal_19@alu.uabcs.mx",
        ]); 
        
        Client::create([
            'name' => "Daniel Sepulveda",
            'phone_number' => "6122193138",
            'email' => "cese_19@alu.uabcs.mx",
        ]); 
    }
}
