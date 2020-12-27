<?php

namespace Hashnode\Tests;

use Hashnode\Api\Enums\FeedType;
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
     * @covers ::StoriesFeedRepository
     */
    public function test_a_stories_feed_can_be_retrieved_with_default_values(): void
    {
        /**
        $posts = $this->repository->getStoriesFeed(new FeedType());
        $firstPost = array_pop($posts);

        $this->assertIsArray($posts);
        $this->assertInstanceOf(Post::class, $firstPost);
         **/
    }
}
