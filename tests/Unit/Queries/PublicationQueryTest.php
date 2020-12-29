<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Links\LinksQuery;
use Hashnode\Queries\Post\PostQuery;
use Hashnode\Queries\Publication\PublicationQuery;
use PHPUnit\Framework\TestCase;

class PublicationQueryTest extends TestCase
{
    protected PublicationQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new PublicationQuery();
    }

    /**
     * @covers ::PublicationQuery, ::LinksQuery
     */
    public function test_selecting_links_returns_a_links_query(): void
    {
        $query = $this->query->selectLinks();

        $this->assertInstanceOf(LinksQuery::class, $query);
    }

    /**
     * @covers ::PublicationQuery, ::PostQuery
     */
    public function test_selecting_posts_returns_a_post_query(): void
    {
        $query = $this->query->selectPosts();

        $this->assertInstanceOf(PostQuery::class, $query);
    }
}
