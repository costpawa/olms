<?php

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'isbn13' => '9786059127400',
            'title' => 'Av Mevsimi',
            'authors' => '[1]',
            'categories' => '[1]',
            'genre' => 1,
            'number_of_pages' => 445,
            'publisher_id' => 1,
            'release_date' => '2021-08-10',
            'languages' => '[1]'
        ]);
    }
}
