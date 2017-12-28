<?php

namespace Pag\Core\Support\Specification;

use Pag\Core\Models\User;

/**
 * Class AndSpecification
 * @package Pag\Core\Support\Specification
 */
class AndSpecification implements UserSpecificationContract
{
    /**
     * @var UserSpecificationContract[]
     */
    private $specifications;

    /**
     * AndSpecification constructor.
     * @param UserSpecificationContract[] ...$specifications
     */
    public function __construct(UserSpecificationContract ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * If at least one specification is false, return false, else return true.
     *
     * @param  User $user
     * @return bool
     */
    public function isSatisfiedBy(User $user): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($user)) {
                return false;
            }
        }
        return true;
    }
}