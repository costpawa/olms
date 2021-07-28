<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Student extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'card_id',
        'tcno',
        'name',
        'surname',
        'phone',
        'email',
        'birthdate',
        'gender',
        'picture',
        'year',
        'branch',
        'course',
        'number',
        'city',
        'district',
        'neighborhood',
        'street',
        'building_number',
        'sms_number',
        'mother_number',
        'father_number',
        'sibling_number',
        'other_number'
    ];
}
