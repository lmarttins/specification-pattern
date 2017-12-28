<?php

namespace App\Specification\Permission;

use App\Specification\AbstractPermissionSpecification;

/**
 * Class UserDeleteSpecification
 * @package App\Specification
 */
class UserDeleteSpecification extends AbstractPermissionSpecification
{
    /**
     * Ability permission user
     * 
     * @var string
     */
    protected $permission = 'users.delete';
}