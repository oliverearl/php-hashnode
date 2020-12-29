<?php

namespace Hashnode\Tests\Unit\Arguments;

use Faker\Factory;
use Faker\Generator;
use Hashnode\Arguments\Publication\PostsArgument;
use PHPUnit\Framework\TestCase;

class PublicationPostsArgumentTest extends TestCase
{
    protected Generator $faker;
    protected PostsArgument $argument;

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Factory::create();
        $this->argument = new PostsArgument();
    }

    /**
     * @covers ::PostsArgument
     */
    public function test_setting_a_page_returns_a_posts_argument(): void
    {
        $page = $this->faker->numberBetween(0, 10);
        $argument = $this->argument->setPage($page);

        $this->assertInstanceOf(PostsArgument::class, $argument);
    }
}
