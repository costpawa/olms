<?php

use App\Models\Punishment;
use Illuminate\Database\Seeder;

class PunishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Punishment::create([
            'name' => 'Geç Getirme',
            'description' => 'Üye kitabı geç getirdi',
            'has_expiration' => '1',
            'default_expiration_date' => '2021-08-27'
        ]);
    }
}
