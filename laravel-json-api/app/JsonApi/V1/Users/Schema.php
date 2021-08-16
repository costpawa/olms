<?php

namespace App\JsonApi\V1\Users;

use App\Models\User;
use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'users';

    /**
     * @param object $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource): string
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param object $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource): array
    {
        $user = User::where("id",$resource->id)->first();
        $roles = $user->getRoleNames();
        $permissions = $user->getAllPermissions()->pluck('name');
        return [
            'name' => $resource->name,
            'email' => $resource->email,
            'roles' => $roles,
            'permissions' => $permissions,
            'created_at' => optional($resource->created_at)->format("Y-m-d H:s:i"),
            'updated_at' => optional($resource->updated_at)->format("Y-m-d H:s:i"),
        ];
    }

    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
        return [
            'user-roles' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
            ]
        ];
    }

}
