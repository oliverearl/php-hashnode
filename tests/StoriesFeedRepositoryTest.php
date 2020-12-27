<?php

namespace Hashnode\Tests;

use Hashnode\Api\Enums\FeedType;
use Hashnode\Api\Post;
use Hashnode\Api\StoriesFeed;
use PHPUnit\Framework\TestCase;

use Hashnode\Api\Repositories\StoriesFeedRepository;

class StoriesFeedRepositoryTest extends TestCase
{
    private StoriesFeedRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new StoriesFeedRepository();
    }

    /**
     * @covers ::StoriesFeedRepository, ::Post
     */
    public function test_a_stories_feed_can_be_retrieved_with_an_enum_value(): void
    {
        $feed = $this->repository->getStoriesFeed(FeedType::NEW());
        $posts = $feed->getPosts();
        $newestPost = array_pop($posts);

        $this->assertInstanceOf(StoriesFeed::class, $feed);
        $this->assertInstanceOf(Post::class, $newestPost);
    }

    /**
     * @covers ::StoriesFeedRepository, ::Post
     */
    public function test_a_stories_feed_can_be_retrieved_with_a_custom_page_value(): void
    {
        $feed = $this->repository->getStoriesFeed(FeedType::NEW(), 5);
        $posts = $feed->getPosts();
        $newestPost = array_pop($posts);

        $this->assertInstanceOf(StoriesFeed::class, $feed);
        $this->assertInstanceOf(Post::class, $newestPost);
    }
}
