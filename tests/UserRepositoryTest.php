<?php

namespace Hashnode\Tests;

use PHPUnit\Framework\TestCase;

use Hashnode\Api\User;
use Hashnode\Api\SocialMedia;
use Hashnode\Api\Repositories\UserRepository;

class UserRepositoryTest extends TestCase
{
    private UserRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new UserRepository();
    }

    /**
     * @covers ::User, ::UserRepository
     */
    public function test_a_user_can_be_retrieved_with_their_username(): void
    {
        $username = 'oliverearl';
        $user = $this->repository->getUser($username);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEqualsIgnoringCase($username, $user->getUsername());
    }

    /**
     * @covers ::User, ::UserRepository, ::SocialMedia
     */
    public function test_a_users_social_media_can_be_retrieved_with_their_username(): void
    {
        $username = 'eleftheriabatsou';
        $user = $this->repository->getUser($username, true, false, false);

        $this->assertEqualsIgnoringCase($username, $user->getUsername());
        $this->assertInstanceOf(SocialMedia::class, $user->getSocialMedia());
    }

    /**
     * @covers ::User, ::UserRepository
     */
    public function test_a_users_followers_can_be_retrieved_with_their_username(): void
    {
        $username = 'catalinpit';
        $user = $this->repository->getUser($username, false, false, true);

        $this->assertEqualsIgnoringCase($username, $user->getUsername());
        $this->assertIsArray($user->getFollowers());
    }
}
