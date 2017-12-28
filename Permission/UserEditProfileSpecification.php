<?php

namespace Pag\Core\Domains\Users\Users\Specification\Permission;

use Pag\Core\Support\Specification\AbstractPermissionSpecification;

/**
 * Class UserEditProfileSpecification
 * @package Pag\Core\Domains\Users\Users\Specification
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
