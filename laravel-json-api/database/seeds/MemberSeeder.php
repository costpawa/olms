<?php

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'card_id' => '1234567890',
            'nationality_id' => '41248065864',
            'name' => 'Hakan',
            'surname' => 'Sarıaslan',
            'member_type' => '1',
            'email' => 'hakan_dnz_000@hotmail.com',
            'phone' => '5523420552',
            'photo' => 'hakan.jpg',
            'description' => 'deneme',
            'address' => 'Mehmet Akif Ersoy Mahallesi 323 Sokak No:32 Daire:9 Kat:5 - Merkezefendi / DENİZLİ',
            'gender' => '1',
            'date_of_birth' => '1995-08-27',
            'country' => 1,
            'city' => 20
        ]);
    }
}
