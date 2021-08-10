<?php

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name' => 'Panama Yayıncılık',
            'phone' => '03124321489',
            'email' => 'info@panamayayincilik.com',
            'website' => 'www.panamayayincilik.com',
            'address' => 'Yüksel Caddesi 7A/7 - Kızılay/ANKARA',
            'country' => 1
        ]);
    }
}
