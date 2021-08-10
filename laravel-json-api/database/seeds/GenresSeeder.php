<?php

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create(['name' => 'Fantasy',                     'sort' => 1]);
        Genre::create(['name' => 'Adventure',                   'sort' => 2]);
        Genre::create(['name' => 'Romance',                     'sort' => 3]);
        Genre::create(['name' => 'Contemporary',                'sort' => 4]);
        Genre::create(['name' => 'Dystopian',                   'sort' => 5]);
        Genre::create(['name' => 'Mystery',                     'sort' => 6]);
        Genre::create(['name' => 'Horror',                      'sort' => 7]);
        Genre::create(['name' => 'Thriller',                    'sort' => 8]);
        Genre::create(['name' => 'Paranormal',                  'sort' => 9]);
        Genre::create(['name' => 'Historial Fiction',           'sort' => 10]);
        Genre::create(['name' => 'Science Fiction',             'sort' => 11]);
        Genre::create(['name' => 'Memoir',                      'sort' => 12]);
        Genre::create(['name' => 'Cooking',                     'sort' => 13]);
        Genre::create(['name' => 'Art',                         'sort' => 14]);
        Genre::create(['name' => 'Self-Help / Personal',        'sort' => 15]);
        Genre::create(['name' => 'Development',                 'sort' => 16]);
        Genre::create(['name' => 'Motivational',                'sort' => 17]);
        Genre::create(['name' => 'Health',                      'sort' => 18]);
        Genre::create(['name' => 'History',                     'sort' => 19]);
        Genre::create(['name' => 'Travel',                      'sort' => 20]);
        Genre::create(['name' => 'Guide / How To',              'sort' => 21]);
        Genre::create(['name' => 'Families & Relationships',    'sort' => 22]);
        Genre::create(['name' => 'Humor',                       'sort' => 23]);
        Genre::create(['name' => 'Children',                    'sort' => 24]);
    }
}
