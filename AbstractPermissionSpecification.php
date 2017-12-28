<?php

namespace App\Specification;

use Pag\Core\Models\User;

abstract class AbstractPermissionSpecification implements UserSpecificationContract
{
    /**
     * Permission name
     *
     * @var string
     */
    protected $permission;

    /**
     * @param  User $user
     * @return bool
     */
    public function isSatisfiedBy(User $user): bool
    {
        if ($user->isAdmin()) {
            return true;
        }

        return $user->hasPermission($this->permission);
    }
}