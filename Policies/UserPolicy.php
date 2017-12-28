<?php

namespace App\Policies;

use Pag\Core\Domains\Users\Users\Specification\Permission\UserCreateSpecification;
use Pag\Core\Domains\Users\Users\Specification\Permission\UserDeleteSpecification;
use Pag\Core\Domains\Users\Users\Specification\Permission\UserEditSpecification;
use Pag\Core\Domains\Users\Users\Specification\Permission\UserViewSpecification;
use Pag\Core\Domains\Users\Users\Specification\Permission\UserEditProfileSpecification;
use Pag\Core\Domains\Users\Users\Specification\Type\AdminGlobalSpecification;
use Pag\Core\Domains\Users\Users\Specification\Type\BackofficeSpecification;
use Pag\Core\Models\User;
use Pag\Core\Domains\Users\Users\Specification\Permission\UserListSpecification;
use Pag\Core\Support\Specification\OrSpecification;

/**
 * Class UserPolicy
 * @package App\Policies
 */
class UserPolicy
{
    /**
     * Ability list user
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
            && (new UserListSpecification())->isSatisfiedBy($user);
    }

    /**
     * Ability create user
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
            && (new UserCreateSpecification())->isSatisfiedBy($user);
    }

    /**
     * Ability edit user
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
            && (new UserEditSpecification())->isSatisfiedBy($user);
    }

    /**
     * Ability view user
     *
     * @param  User $user
     * @return bool
     */
    public function view(User $user)
    {
        return
            (new OrSpecification(
                new AdminGlobalSpecification(),
                new BackofficeSpecification()
            ))->isSatisfiedBy($user)
            && (new UserViewSpecification())->isSatisfiedBy($user);
    }

    /**
     * Ability delete user
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
            && (new UserDeleteSpecification())->isSatisfiedBy($user);
    }

    /**
     * Ability to edit profile
     *
     * @param  User $user
     * @return bool
     */
    public function editProfile(User $user)
    {
        return (new UserEditProfileSpecification())->isSatisfiedBy($user);
    }
}
