<?php

namespace Hashnode\Tests;

use PHPUnit\Framework\TestCase;

use Hashnode\Api\User;
use Hashnode\Api\Repositories\UserRepository;
use function MongoDB\BSON\toJSON;

class UserTest extends TestCase
{
    private string $username;
    private UserRepository $repository;
    private User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->username     = 'oliverearl';
        $this->repository   = new UserRepository();
        $this->user         = $this->repository->getUser($this->username);
    }

    /**
     * @covers ::User
     */
    public function test_convert_a_user_into_an_associative_array(): void
    {
        $associativeArray = $this->user->toArray();

        $this->assertIsArray($associativeArray);
        $this->assertEquals($this->username, $associativeArray['username']);
    }

    /**
     * @covers ::User
     */
    public function test_convert_a_user_into_json(): void
    {
        $json = $this->user->toJson();

        $this->assertJson($json);
    }
}
