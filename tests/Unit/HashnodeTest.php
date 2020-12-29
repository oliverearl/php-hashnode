<?php

namespace Hashnode\Tests\Unit;

use Faker\Factory;
use Faker\Generator;
use Hashnode\Hashnode;
use PHPUnit\Framework\TestCase;

class HashnodeTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Factory::create();
    }

    /**
     * @covers ::Hashnode
     */
    public function test_a_hashnode_client_can_be_set_up_with_default_values(): void
    {
        $client = new Hashnode();

        $this->assertInstanceOf(Hashnode::class, $client);
    }

    /**
     * @covers ::Hashnode
     */
    public function test_a_hashnode_client_can_be_set_up_with_custom_parameters(): void
    {
        $endpoint = 'https://apiv2.hashnode.com';
        $apiKey = $this->faker->uuid;

        $client = new Hashnode($apiKey, [
            'Authorization' => $endpoint
        ]);

        $this->assertInstanceOf(Hashnode::class, $client);
    }
}
