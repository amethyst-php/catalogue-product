<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\CatalogueProduct                 newEntity()
 * @method \Amethyst\Schemas\CatalogueProductSchema          getSchema()
 * @method \Amethyst\Repositories\CatalogueProductRepository getRepository()
 * @method \Amethyst\Serializers\CatalogueProductSerializer  getSerializer()
 * @method \Amethyst\Validators\CatalogueProductValidator    getValidator()
 * @method \Amethyst\Authorizers\CatalogueProductAuthorizer  getAuthorizer()
 */
class CatalogueProductManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.catalogue-product.data.catalogue-product';
}
