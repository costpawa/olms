<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Punishment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'has_expiration',
        'default_expiration_date'
    ];
}
