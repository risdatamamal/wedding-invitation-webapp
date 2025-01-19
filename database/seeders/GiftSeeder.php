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
        Gift::insert([
            [
                'name' => 'BANK MANDIRI',
                'no_rekening' => '1010013675572',
                'note' => 'a/n: Novia Ryan Ramadhan',
                'icon' => 'icon-mandiri.jpg',
            ],
            [
                'name' => 'BANK BCA',
                'no_rekening' => '4760282435',
                'note' => 'a/n: Risda Tamam Aljava',
                'icon' => 'icon-bca.jpg',
            ],
        ]);
    }
}
