<?php

namespace App\Specification\Permission;

use App\Specification\AbstractPermissionSpecification;

/**
 * Class UserListSpecification
 * @package App\Specification
 */
class UserListSpecification extends AbstractPermissionSpecification
{
    /**
     * Ability permission user
     *
     * @var string
     */
    protected $permission = 'users.list';
}