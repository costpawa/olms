<?php

namespace App\JsonApi\V1\Users;

use App\Models\User;
use CloudCreativity\LaravelJsonApi\Document\ResourceObject;
use CloudCreativity\LaravelJsonApi\Eloquent\AbstractAdapter;
use CloudCreativity\LaravelJsonApi\Pagination\StandardStrategy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class Adapter extends AbstractAdapter
{

    /**
     * Mapping of JSON API attribute field names to model keys.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Mapping of JSON API filter names to model scopes.
     *
     * @var array
     */
    protected $filterScopes = [];

    /**
     * User's role for assignment
     *
     * @var mixed
     */
    protected $role;

    /**
     * Adapter constructor.
     *
     * @param StandardStrategy $paging
     */
    public function __construct(StandardStrategy $paging)
    {
        parent::__construct(new User(), $paging);
    }

    /**
     * @param Builder $query
     * @param Collection $filters
     * @return void
     */
    protected function filter($query, Collection $filters)
    {
        $this->filterWithScopes($query, $filters);
    }

    protected function created(User $user): void
    {
        if(!is_null($user->user_roles)) {
            foreach($user->user_roles as $role) {
                $user->assignRole($role);
            }
        }
        if(!is_null($user->user_permissions)) {
            foreach($user->user_permissions as $permission) {
                $user->givePermissionTo($permission);
            }
        }
    }

    protected function userRoles()
    {
        return $this->hasMany();
    }
}
