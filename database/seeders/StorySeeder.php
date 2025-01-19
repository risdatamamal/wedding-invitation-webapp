<?php

namespace Database\Seeders;

use App\Models\Story;

use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Story::create(
            [
                'title' => 'Pandangan Pertama',
                'date' => '2019-03-30',
                'content' => 'perkenalan indah dibelakang panggung yang tak sengaja',
                'photo' => '10.jpg'
            ],

        );
    }
}
