<?php

namespace App\Policies;

use Pag\Core\Domains\Users\Profile\Specification\ProfileCreateSpecification;
use Pag\Core\Domains\Users\Profile\Specification\ProfileDeleteSpecification;
use Pag\Core\Domains\Users\Profile\Specification\ProfileEditSpecification;
use Pag\Core\Domains\Users\Users\Specification\Type\AdminGlobalSpecification;
use Pag\Core\Domains\Users\Users\Specification\Type\BackofficeSpecification;
use Pag\Core\Models\User;
use Pag\Core\Domains\Users\Profile\Specification\ProfileListSpecification;
use Pag\Core\Support\Specification\OrSpecification;

/**
 * Class ProfilePolicy
 * @package App\Policies
 */
class ProfilePolicy
{
    /**
     * Ability list profile
     *
     * @param  User $user
     * @return bool
     */
    public function list(User $user)
    {
        return
            (new OrSpecification(
                new AdminGlobalSpecification(),
                new BackofficeSpecification()
            ))->isSatisfiedBy($user)
            && (new ProfileListSpecification())->isSatisfiedBy($user);
    }

    /**
     * Ability create profile
     *
     * @param  User $user
     * @return bool
     */
    public function create(User $user)
    {
        return
            (new OrSpecification(
                new AdminGlobalSpecification(),
                new BackofficeSpecification()
            ))->isSatisfiedBy($user)
            && (new ProfileCreateSpecification())->isSatisfiedBy($user);
    }

    /**
     * Ability edit profile
     *
     * @param  User $user
     * @return bool
     */
    public function edit(User $user)
    {
        return
            (new OrSpecification(
                new AdminGlobalSpecification(),
                new BackofficeSpecification()
            ))->isSatisfiedBy($user)
            && (new ProfileEditSpecification())->isSatisfiedBy($user);
    }

    /**
     * Ability delete profile
     *
     * @param  User $user
     * @return bool
     */
    public function delete(User $user)
    {
        return
            (new OrSpecification(
                new AdminGlobalSpecification(),
                new BackofficeSpecification()
            ))->isSatisfiedBy($user)
            && (new ProfileDeleteSpecification())->isSatisfiedBy($user);
    }
}
