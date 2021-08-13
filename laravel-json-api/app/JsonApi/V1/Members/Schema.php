<?php

namespace App\JsonApi\V1\Members;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'members';

    /**
     * @param $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'card_id' => $resource->card_id,
            'nationality_id' => $resource->nationality_id,
            'name' => $resource->name,
            'surname' => $resource->surname,
            'status' => $resource->status,
            'member_type' => $resource->member_type,
            'email' => $resource->email,
            'phone' => $resource->phone,
            'photo' => $resource->photo,
            'address' => $resource->address,
            'gender' => $resource->gender,
            'date_of_birth' => $resource->date_of_birth,
            'country' => $resource->country,
            'city' => $resource->city,
            'created-at' => $resource->created_at->toAtomString(),
            'updated-at' => $resource->updated_at->toAtomString(),
        ];
    }
}
