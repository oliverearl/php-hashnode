<?php

namespace Hashnode\Tests\Unit\Arguments;

use Faker\Factory;
use Faker\Generator;
use Hashnode\Arguments\RootStoriesFeedArgument;
use Hashnode\Enums\FeedTypeEnum;
use PHPUnit\Framework\TestCase;

class RootStoriesFeedArgumentTest extends TestCase
{
    protected Generator $faker;
    protected RootStoriesFeedArgument $argument;

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Factory::create();
        $this->argument = new RootStoriesFeedArgument();
    }

    /**
     * @covers ::RootStoriesFeed
     */
    public function test_setting_a_type_returns_a_root_stories_feed_argument(): void
    {
        $type = FeedTypeEnum::NEW;
        $argument = $this->argument->setType($type);

        $this->assertInstanceOf(RootStoriesFeedArgument::class, $argument);
    }

    /**
     * @covers ::RootStoriesFeed
     */
    public function test_setting_a_page_returns_a_root_stories_feed_argument(): void
    {
        $page = $this->faker->numberBetween(0, 10);
        $argument = $this->argument->setPage($page);

        $this->assertInstanceOf(RootStoriesFeedArgument::class, $argument);
    }
}
