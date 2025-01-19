<?php

namespace Database\Seeders;

use App\Models\About;

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	About::create([
    		'man_name' => 'Risda Tamam Aljava S.Kom',
            'man_nickname' => 'Tamam',
            'man_son_of' => 'Ketiga',
    		'man_father' => 'Drs. Parmono M. Pd',
            'man_mother' => 'Eli Damayanti S. PdI',
    		'man_about' => 'Seorang Pemuda yang Pemberani',
    		'man_photo' => 'man.jpg',
    		'woman_name' => 'Novia Ryan Ramadhan S.Si',
            'woman_nickname' => 'Novia',
            'woman_son_of' => 'Kedua',
    		'woman_father' => 'Dedi Iskandar',
            'woman_mother' => 'Sawiyah',
    		'woman_about' => 'Seorang Pemudi yang Baik Hati',
    		'woman_photo' => 'woman.jpg'
    	]);
    }
}
