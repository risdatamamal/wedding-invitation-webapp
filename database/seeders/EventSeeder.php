<?php

namespace Database\Seeders;

use App\Models\Event;

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Event::insert([
            [
                'name' => 'Akad',
                'location' => 'Kampung Makan Joglo',
                'date' => '2025-01-26',
                'start_time' => '10:00:00',
                'end_time' => '11:00:00',
                'photo' => 'akad.jpg'
            ],
            [
                'name' => 'Resepsi',
                'location' => 'Kampung Makan Joglo',
                'date' => '2025-01-26',
                'start_time' => '11:00:00',
                'end_time' => '13:30:00',
                'photo' => 'resepsi.jpg'
            ]
        ]);
    }
}
