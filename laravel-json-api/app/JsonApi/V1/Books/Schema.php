<?php

namespace App\JsonApi\V1\Books;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'books';

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
            'isbn13' => $resource->isbn13,
            'isbn10' => optional($resource->isbn10),
            'title' => $resource->title,
            'number_of_pages' => $resource->number_of_pages,
            'release_date' => $resource->release_date,
            'created_at' => optional($resource->created_at)->format("Y-m-d H:s:i"),
            'updated_at' => optional($resource->updated_at)->format("Y-m-d H:s:i"),
        ];
    }
}
