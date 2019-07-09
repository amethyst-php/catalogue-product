<?php

namespace Amethyst\Tests\Http\Admin;

use Amethyst\Api\Support\Testing\TestableBaseTrait;
use Amethyst\Fakers\CatalogueProductFaker;
use Amethyst\Tests\BaseTest;

class CatalogueProductTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CatalogueProductFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Route name.
     *
     * @var string
     */
    protected $route = 'admin.catalogue-product';
}
