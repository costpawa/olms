<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'point',
        'color',
        'sorting'
    ];
}
