<?php

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'language' => 'Turkish',
            'country' => 'Turkey',
            'flag' => 'turkey.jpg'
        ]);
    }
}
