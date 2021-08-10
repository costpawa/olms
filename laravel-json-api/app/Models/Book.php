<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isbn13',
        'isbn10',
        'title',
        'authors',
        'categories',
        'genre',
        'number_of_pages',
        'publisher_id',
        'release_date',
        'languages'
    ];
}
