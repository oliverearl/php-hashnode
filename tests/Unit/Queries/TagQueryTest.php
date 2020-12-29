<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Contributor\ContributorQuery;
use Hashnode\Queries\Post\PostQuery;
use Hashnode\Queries\Tag\TagLeaderboardQuery;
use Hashnode\Queries\Tag\TagManagerQuery;
use Hashnode\Queries\Tag\TagQuery;
use Hashnode\Queries\Tag\TagSocialMediaQuery;
use Hashnode\Queries\Tag\TagStatsQuery;
use PHPUnit\Framework\TestCase;

class TagQueryTest extends TestCase
{
    protected TagQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new TagQuery();
    }

    /**
     * @covers ::TagQuery, TagStatsQuery
     */
    public function test_selecting_stats_returns_a_tag_stats_query(): void
    {
        $query = $this->query->selectStats();

        $this->assertInstanceOf(TagStatsQuery::class, $query);
    }

    /**
     * @covers ::TagQuery, ::TagLeaderboardQuery
     */
    public function test_selecting_a_leaderboard_returns_a_tag_leaderboard_query(): void
    {
        $query = $this->query->selectLeaderboard();

        $this->assertInstanceOf(TagLeaderboardQuery::class, $query);
    }

    /**
     * @covers ::TagQuery, ::TagManagerQuery
     */
    public function test_selecting_managers_returns_a_tag_manager_query(): void
    {
        $query = $this->query->selectManagers();

        $this->assertInstanceOf(TagManagerQuery::class, $query);
    }

    /**
     * @covers ::TagQuery, ::TagSocialMediaQuery
     */
    public function test_selecting_social_media_returns_a_tag_social_media_query(): void
    {
        $query = $this->query->selectSocialMedia();

        $this->assertInstanceOf(TagSocialMediaQuery::class, $query);
    }

    /**
     * @covers ::TagQuery, ::PostQuery
     */
    public function test_selecting_posts_returns_a_post_query(): void
    {
        $query = $this->query->selectPosts();

        $this->assertInstanceOf(PostQuery::class, $query);
    }

    /**
     * @covers ::TagQuery, ::ContributorQuery
     */
    public function test_selecting_contributors_returns_a_contributor_query(): void
    {
        $query = $this->query->selectContributors();

        $this->assertInstanceOf(ContributorQuery::class, $query);
    }
}
