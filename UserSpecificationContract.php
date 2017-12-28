<?php

namespace Pag\Core\Support\Specification;

use Pag\Core\Models\User;

interface UserSpecificationContract
{
    /**
     * @param  User $user
     * @return bool
     */
    public function isSatisfiedBy(User $user): bool;
}