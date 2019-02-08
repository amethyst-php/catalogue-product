<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\CatalogueProductsController::class,
    'router'     => [
        'as'     => 'catalogue-product.',
        'prefix' => '/catalogue-products',
    ],
];
