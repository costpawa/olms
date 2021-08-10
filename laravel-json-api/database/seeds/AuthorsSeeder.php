<?php

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([
            'name'          => 'Mason',
            'surname'       => 'Cross',
            'genres'        => '[1]',
            'language'      => 1,
            'nationality'   => 1,
            'gender'        => '1',
            'date_of_birth' => '1971-08-10',
            'description'   => 'deneme'
        ]);
    }
}
