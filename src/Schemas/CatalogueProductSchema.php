<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\CatalogueManager;
use Railken\Amethyst\Managers\ProductManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class CatalogueProductSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('catalogue_id')
                ->setRelationName('catalogue')
                ->setRelationManager(CatalogueManager::class)
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('product_id')
                ->setRelationName('product')
                ->setRelationManager(ProductManager::class)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
