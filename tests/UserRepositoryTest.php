<?php

namespace Hashnode\Tests;

use PHPUnit\Framework\TestCase;

use Hashnode\Api\User;
use Hashnode\Api\Repositories\UserRepository;

class UserRepositoryTest extends TestCase
{
    /**
     * @covers ::User, ::UserRepository
     */
    public function test_get_a_user_by_their_username(): void
    {
        $username = 'oliverearl';
        $repository = new UserRepository();
        $user = $repository->getUser($username);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($username, $user->getUsername());
    }
}
