<?php

namespace App\Specification\Permission;

use App\Specification\AbstractPermissionSpecification;

/**
 * Class UserEditSpecification
 * @package App\Specification
 */
class UserEditSpecification extends AbstractPermissionSpecification
{
    /**
     * Ability permission user
     * 
     * @var string
     */
    protected $permission = 'users.edit';
}