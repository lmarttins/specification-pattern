<?php

namespace Pag\Core\Domains\Users\Users\Specification\Permission;

use Pag\Core\Support\Specification\AbstractPermissionSpecification;

/**
 * Class UserDeleteSpecification
 * @package Pag\Core\Domains\Users\Users\Specification
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