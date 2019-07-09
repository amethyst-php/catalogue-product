<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class CatalogueProductAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'catalogue-product.create',
        Tokens::PERMISSION_UPDATE => 'catalogue-product.update',
        Tokens::PERMISSION_SHOW   => 'catalogue-product.show',
        Tokens::PERMISSION_REMOVE => 'catalogue-product.remove',
    ];
}
