<?php

namespace App\JsonApi\V1\Students;

use Illuminate\Validation\Rule;
use CloudCreativity\LaravelJsonApi\Validation\AbstractValidators;

class Validators extends AbstractValidators
{

    /**
     * The include paths a client is allowed to request.
     *
     * @var string[]|null
     *      the allowed paths, an empty array for none allowed, or null to allow all paths.
     */
    protected $allowedIncludePaths = [];

    /**
     * The sort field names a client is allowed send.
     *
     * @var string[]|null
     *      the allowed fields, an empty array for none allowed, or null to allow all fields.
     */
    protected $allowedSortParameters = ['card_id','tcno','name','surname','phone','email','birthdate','gender','picture','year','branch','course','number','city_id','district_id','neighborhood_id',
        'street','building_number','sms_number','mother_number','father_number','sibling_number','other_number'];

    /**
     * The filters a client is allowed send.
     *
     * @var string[]|null
     *      the allowed filters, an empty array for none allowed, or null to allow all.
     */
    protected $allowedFilteringParameters = ['card_id','tcno','name','surname','phone','email','birthdate','gender','picture','year','branch','course','number','city_id','district_id','neighborhood_id',
        'street','building_number','sms_number','mother_number','father_number','sibling_number','other_number'];

    /**
     * Get resource validation rules.
     *
     * @param mixed|null $record
     *      the record being updated, or null if creating a resource.
     * @return array
     */
    protected function rules($record = null): array
    {
        if ($record) {
            return [
                'card_id' => [
                    'sometimes',
                    Rule::unique('students')
                ],
                'tcno' => [
                    'sometimes',
                    Rule::unique('students')
                ],
                'name' => 'sometimes',
                'surname' => 'sometimes',
                'email' => [
                    'sometimes',
                    'email',
                    Rule::unique('students')
                ],
                'number' => [
                    'sometimes',
                    Rule::unique('students')
                ]
            ];
        }

        return [
            'card_id' => [
                'required',
                Rule::unique('students')
            ],
            'tcno' => [
                'required',
                Rule::unique('students')
            ],
            'name' => 'required',
            'surname' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('students')
            ],
            'number' => [
                'required',
                Rule::unique('students')
            ]
        ];
    }

    /**
     * Get query parameter validation rules.
     *
     * @return array
     */
    protected function queryRules(): array
    {
        return [];
    }

}
