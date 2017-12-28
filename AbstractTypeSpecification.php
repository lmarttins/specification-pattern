<?php

namespace App\Specification;

use Pag\Core\Models\User;

class AbstractTypeSpecification implements UserSpecificationContract
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @param  User $user
     * @return bool
     */
    public function isSatisfiedBy(User $user): bool
    {
        if ($user->isAdmin()) {
            return true;
        }

        return $user->hasType($this->type);
    }
}