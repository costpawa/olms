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
        Genre::create(['name' => 'Fantasy',                     'sorting' => 1]);
        Genre::create(['name' => 'Adventure',                   'sorting' => 2]);
        Genre::create(['name' => 'Romance',                     'sorting' => 3]);
        Genre::create(['name' => 'Contemporary',                'sorting' => 4]);
        Genre::create(['name' => 'Dystopian',                   'sorting' => 5]);
        Genre::create(['name' => 'Mystery',                     'sorting' => 6]);
        Genre::create(['name' => 'Horror',                      'sorting' => 7]);
        Genre::create(['name' => 'Thriller',                    'sorting' => 8]);
        Genre::create(['name' => 'Paranormal',                  'sorting' => 9]);
        Genre::create(['name' => 'Historial Fiction',           'sorting' => 10]);
        Genre::create(['name' => 'Science Fiction',             'sorting' => 11]);
        Genre::create(['name' => 'Memoir',                      'sorting' => 12]);
        Genre::create(['name' => 'Cooking',                     'sorting' => 13]);
        Genre::create(['name' => 'Art',                         'sorting' => 14]);
        Genre::create(['name' => 'Self-Help / Personal',        'sorting' => 15]);
        Genre::create(['name' => 'Development',                 'sorting' => 16]);
        Genre::create(['name' => 'Motivational',                'sorting' => 17]);
        Genre::create(['name' => 'Health',                      'sorting' => 18]);
        Genre::create(['name' => 'History',                     'sorting' => 19]);
        Genre::create(['name' => 'Travel',                      'sorting' => 20]);
        Genre::create(['name' => 'Guide / How To',              'sorting' => 21]);
        Genre::create(['name' => 'Families & Relationships',    'sorting' => 22]);
        Genre::create(['name' => 'Humor',                       'sorting' => 23]);
        Genre::create(['name' => 'Children',                    'sorting' => 24]);
    }
}
