<?php

namespace Pag\Core\Domains\Users\Users\Specification\Permission;

use Pag\Core\Support\Specification\AbstractPermissionSpecification;

/**
 * Class UserListSpecification
 * @package Pag\Core\Domains\Users\Users\Specification
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