<?php

namespace Hashnode\Tests\Unit\Arguments;

use Faker\Factory;
use Faker\Generator;
use Hashnode\Arguments\RootUserArgument;
use PHPUnit\Framework\TestCase;

class RootUserArgumentTest extends TestCase
{
    protected Generator $faker;
    protected RootUserArgument $argument;

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Factory::create();
        $this->argument = new RootUserArgument();
    }

    /**
     * @covers ::RootUserArgument
     */
    public function test_setting_a_username_returns_a_root_user_argument(): void
    {
        $username = $this->faker->userName;
        $argument = $this->argument->setUsername($username);

        $this->assertInstanceOf(RootUserArgument::class, $argument);
    }
}
