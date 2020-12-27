<?php

namespace Hashnode\Tests;

use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

use Hashnode\Client;
use Hashnode\Api\Repositories\UserRepository;

class RepositoryTest extends TestCase
{
    private Generator $faker;
    private UserRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Factory::create();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        Client::destroyInstance();
    }

    /**
     * @covers ::Repository, ::UserRepository, ::Client
     */
    public function test_a_repository_subclass_can_automatically_inject_a_client_instance()
    {
        $this->repository = new UserRepository();

        $client = $this->repository->getClient();
        $clientSingleton = Client::getInstance();

        $this->assertSame($client, $clientSingleton);
    }

    /**
     * @covers ::Repository, ::UserRepository, ::Client
     */
    public function test_a_repository_subclass_can_be_passed_a_custom_client_instance()
    {
        $uuid = $this->faker->uuid;
        $api = 'https://apiv2.hashnode.com';
        $version = '2.0.0';

        $client = Client::getInstance($uuid, $api, $version);
        $this->repository = new UserRepository($client);

        $this->assertInstanceOf(Client::class, $this->repository->getClient());
        $this->assertEquals($uuid, $this->repository->getClient()->getApiKey());
    }
}
