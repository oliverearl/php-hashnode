<?php

namespace Hashnode\Tests\Unit\Arguments;

use Faker\Factory;
use Faker\Generator;
use Hashnode\Arguments\PostDetailed\ResponsesArgument;
use PHPUnit\Framework\TestCase;

class PostDetailedResponsesArgumentTest extends TestCase
{
    protected Generator $faker;
    protected ResponsesArgument $argument;

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Factory::create();
        $this->argument = new ResponsesArgument();
    }

    /**
     * @covers ::ResponsesArgument
     */
    public function test_setting_a_page_returns_a_responses_argument(): void
    {
        $page = $this->faker->numberBetween(0, 10);
        $argument = $this->argument->setPage($page);

        $this->assertInstanceOf(ResponsesArgument::class, $argument);
    }
}
