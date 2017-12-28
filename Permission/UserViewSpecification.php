<?php

namespace App\Specification\Permission;

use App\Specification\AbstractPermissionSpecification;

/**
 * Class UserViewSpecification
 * @package App\Specification
 */
class UserViewSpecification extends AbstractPermissionSpecification
{
    /**
     * Ability user view
     *
     * @var string
     */
    protected $permission = 'users.view';
}