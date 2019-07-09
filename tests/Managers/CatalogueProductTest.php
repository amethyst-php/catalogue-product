<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\CatalogueProductFaker;
use Amethyst\Managers\CatalogueProductManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class CatalogueProductTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = CatalogueProductManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CatalogueProductFaker::class;
}
