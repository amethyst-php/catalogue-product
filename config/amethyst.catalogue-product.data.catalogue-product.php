<?php

return [
    'table'      => 'amethyst_catalogue_products',
    'comment'    => 'CatalogueProduct',
    'model'      => Amethyst\Models\CatalogueProduct::class,
    'schema'     => Amethyst\Schemas\CatalogueProductSchema::class,
    'repository' => Amethyst\Repositories\CatalogueProductRepository::class,
    'serializer' => Amethyst\Serializers\CatalogueProductSerializer::class,
    'validator'  => Amethyst\Validators\CatalogueProductValidator::class,
    'authorizer' => Amethyst\Authorizers\CatalogueProductAuthorizer::class,
    'faker'      => Amethyst\Fakers\CatalogueProductFaker::class,
    'manager'    => Amethyst\Managers\CatalogueProductManager::class,
];
