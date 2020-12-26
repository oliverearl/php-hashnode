<?php

namespace Hashnode\Tests;

use Faker\Factory;
use GraphQL\Client as GraphQLClient;
use PHPUnit\Framework\TestCase;

use Hashnode\Client;

class ClientTest extends TestCase
{
    private $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Factory::create();
    }

    protected function tearDown(): void
    {
        // https://gonzalo123.com/2012/09/24/the-reason-why-singleton-is-a-problem-with-phpunit/
        parent::tearDown();
        Client::destroyInstance();
    }

    /**
     * @covers ::Client
     */
    public function test_the_client_can_be_created_with_default_values(): void
    {
        $client = Client::getInstance();
        $this->assertInstanceOf(Client::class, $client);
    }

    /**
     * @covers ::Client
     */
    public function test_the_client_can_be_created_with_a_custom_api_key(): void
    {
        $apiKey = $this->faker->uuid;
        $client = Client::getInstance($apiKey);

        $this->assertInstanceOf(Client::class, $client);
        $this->assertEquals($apiKey, $client->getApiKey());
    }

    /**
     * @covers ::Client
     */
    public function test_the_client_can_be_created_with_entirely_custom_values(): void
    {
        $apiKey =       $this->faker->uuid;
        $endpoint =     $this->faker->url;
        $version =      (string) $this->faker->randomFloat(2, 0, 10);
        $client =       Client::getInstance($apiKey, $endpoint, $version);

        $this->assertInstanceOf(Client::class, $client);
        $this->assertEquals($apiKey, $client->getApiKey());
        $this->assertEquals($endpoint, $client->getApiEndpoint());
        $this->assertEquals($version, $client->getApiVersion());
    }

    /**
     * @covers ::Client
     */
    public function test_the_client_can_only_be_instantiated_once(): void
    {
        $client = Client::getInstance();
        $secondClient = Client::getInstance();

        $this->assertSame($client, $secondClient);
    }

    /**
     * @covers ::Client, ::GraphQLClient
     */
    public function test_the_client_can_provide_bypass_access_to_the_internal_graphql_client(): void {
        $client = Client::getInstance();
        $bypassClient = $client->getRawAccess();

        $this->assertInstanceOf(GraphQLClient::class, $bypassClient);
    }
}
