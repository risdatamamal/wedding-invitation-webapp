<?php

namespace Database\Seeders;

use App\Models\Gift;

use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Gift::create(
            [
                'name' => 'Admin',
                'no_rekening' => '1234567890',
                'note' => 'a/n: Admin',
                'icon' => 'icon.jpg'
            ]
    );
    }
}
