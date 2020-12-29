<?php

namespace Hashnode\Tests\Unit\Arguments;

use Faker\Factory;
use Faker\Generator;
use Hashnode\Arguments\RootAmasArgument;
use Hashnode\Arguments\RootUserArgument;
use PHPUnit\Framework\TestCase;

class RootAmasArgumentTest extends TestCase
{
    protected Generator $faker;
    protected RootAmasArgument $argument;

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Factory::create();
        $this->argument = new RootAmasArgument();
    }

    /**
     * @covers ::RootAmasArgument
     */
    public function test_setting_a_page_returns_a_root_amas_argument(): void
    {
        $page = $this->faker->numberBetween(0, 10);
        $argument = $this->argument->setPage($page);

        $this->assertInstanceOf(RootAmasArgument::class, $argument);
    }
}
