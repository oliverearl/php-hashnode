<?php

namespace Hashnode\Tests\Unit\Arguments;

use Faker\Factory;
use Faker\Generator;
use Hashnode\Arguments\RootPostArgument;
use PHPUnit\Framework\TestCase;

class RootPostArgumentTest extends TestCase
{
    protected Generator $faker;
    protected RootPostArgument $argument;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->faker = Factory::create();
        $this->argument = new RootPostArgument();
    }

    /**
     * @covers ::RootPostArgument
     */
    public function test_setting_a_slug_returns_a_root_post_argument(): void
    {
        $slug = $this->faker->slug;
        $argument = $this->argument->setSlug($slug);

        $this->assertInstanceOf(RootPostArgument::class, $argument);
    }

    /**
     * @covers ::RootPostArgument
     */
    public function test_setting_a_hostname_returns_a_root_post_argument(): void
    {
        $hostname = $this->faker->url;
        $argument = $this->argument->setHostname($hostname);

        $this->assertInstanceOf(RootPostArgument::class, $argument);
    }
}
