<?php

use App\Models\MemberType;
use Illuminate\Database\Seeder;

class MemberTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemberType::create([
            'name' => 'Normal',
            'point' => 0,
            'color' => 'ffffff',
            'sorting' => 1
        ]);
        MemberType::create([
            'name' => 'Bronze',
            'point' => 10,
            'color' => 'bf8970',
            'sorting' => 2
        ]);
        MemberType::create([
            'name' => 'Silver',
            'point' => 20,
            'color' => 'c0c0c0',
            'sorting' => 3
        ]);
        MemberType::create([
            'name' => 'Gold',
            'point' => 30,
            'color' => 'ffd700',
            'sorting' => 4
        ]);
    }
}
