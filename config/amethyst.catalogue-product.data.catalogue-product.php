<?php

return [
    'table'      => 'amethyst_catalogue_products',
    'comment'    => 'CatalogueProduct',
    'model'      => Railken\Amethyst\Models\CatalogueProduct::class,
    'schema'     => Railken\Amethyst\Schemas\CatalogueProductSchema::class,
    'repository' => Railken\Amethyst\Repositories\CatalogueProductRepository::class,
    'serializer' => Railken\Amethyst\Serializers\CatalogueProductSerializer::class,
    'validator'  => Railken\Amethyst\Validators\CatalogueProductValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\CatalogueProductAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\CatalogueProductFaker::class,
    'manager'    => Railken\Amethyst\Managers\CatalogueProductManager::class,
];
