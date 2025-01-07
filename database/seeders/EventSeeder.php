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
    	Event::create(
            [
                'name' => 'Akad & Resepsi',
                'location' => 'Kampung Makan Joglo',
                'date' => '2025-01-26',
                'photo' => 'event.jpg'
            ]
    );
    }
}
