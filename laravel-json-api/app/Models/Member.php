<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'card_id',
        'nationality_id',
        'name',
        'surname',
        'status',
        'member_type',
        'email',
        'phone',
        'photo',
        'description',
        'address',
        'gender',
        'date_of_birth',
        'country',
        'city'
    ];
}
