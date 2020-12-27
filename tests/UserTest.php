<?php

namespace Hashnode\Tests;

use PHPUnit\Framework\TestCase;

use Hashnode\Api\User;
use Hashnode\Api\Repositories\UserRepository;

class UserTest extends TestCase
{
    private string $username;
    private User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->username     = 'oliverearl';
        $this->user         = (new UserRepository())->getUser($this->username, true, true, true);
    }

    /**
     * @covers ::User, ::Resource
     */
    public function test_a_resource_subclass_can_be_returned_as_an_associative_array(): void
    {
        $associativeArray = $this->user->toArray();

        $this->assertIsArray($associativeArray);
        $this->assertEquals($this->username, $associativeArray['username']);
    }

    /**
     * @covers ::User, ::Resource
     */
    public function test_a_resource_subclass_can_be_returned_as_json(): void
    {
        $json = $this->user->toJson();

        $this->assertJson($json);
    }

    /**
     * @covers ::User, ::Resource
     */
    public function test_a_resource_subclass_properties_can_be_returned_as_an_array(): void
    {
        $array = $this->user->getProperties();
        $needle = 'username';

        $this->assertIsArray($array);
        $this->assertTrue(in_array($needle, $array));
    }
}
