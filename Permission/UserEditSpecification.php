<?php

namespace Pag\Core\Domains\Users\Users\Specification\Permission;

use Pag\Core\Support\Specification\AbstractPermissionSpecification;

/**
 * Class UserEditSpecification
 * @package Pag\Core\Domains\Users\Users\Specification
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