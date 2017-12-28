<?php

namespace App\Specification\Permission;

use App\Specification\AbstractPermissionSpecification;

/**
 * Class UserCreateSpecification
 * @package App\Specification
 */
class UserCreateSpecification extends AbstractPermissionSpecification
{
    /**
     * Ability permission user
     * 
     * @var string
     */
    protected $permission = 'users.create';
}