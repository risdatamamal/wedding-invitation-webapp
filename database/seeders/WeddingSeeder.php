<?php

namespace Database\Seeders;

use App\Models\Wedding;

use Illuminate\Database\Seeder;

class WeddingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Wedding::create([
    		'date' => '2025-01-26',
    		'time' => '10:00',
    		'location' => 'Kampung Makan Joglo, Jl. Joglo Raya No.21 7, RT.7/RW.1, Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640',
    		'iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.322462611712!2d106.72179315541993!3d-6.220060999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0b34acfdb09%3A0x4c17a705106763c1!2sKampung%20Makan!5e0!3m2!1sid!2sid!4v1736250092328!5m2!1sid!2sid',
            'image' => '1.jpg'
    	]);
    }
}
