<?php

namespace App\Specification\Permission;

use App\Specification\AbstractPermissionSpecification;

/**
 * Class UserEditProfileSpecification
 * @package App\Specification
 */
class UserEditProfileSpecification extends AbstractPermissionSpecification
{
    /**
     * Ability permission to edit my-profile
     *
     * @var string
     */
    protected $permission = 'users.updateprofile';
}
