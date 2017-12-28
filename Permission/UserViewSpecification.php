<?php

namespace Pag\Core\Domains\Users\Users\Specification\Permission;

use Pag\Core\Support\Specification\AbstractPermissionSpecification;

/**
 * Class UserViewSpecification
 * @package Pag\Core\Domains\Users\Users\Specification
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