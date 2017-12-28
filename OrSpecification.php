<?php

namespace App\Specification;

use Pag\Core\Models\User;

/**
 * Class OrSpecification
 * @package App\Specification
 */
class OrSpecification implements UserSpecificationContract
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
     * If at least one specification is true, return true, else return false
     *
     * @param  User $user
     * @return bool
     */
    public function isSatisfiedBy(User $user): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($user)) {
                return true;
            }
        }
        return false;
    }
}