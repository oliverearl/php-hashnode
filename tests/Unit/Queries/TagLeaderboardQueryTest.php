<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Tag\TagLeaderboardMemberQuery;
use Hashnode\Queries\Tag\TagLeaderboardQuery;
use PHPUnit\Framework\TestCase;

class TagLeaderboardQueryTest extends TestCase
{
    protected TagLeaderboardQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new TagLeaderboardQuery();
    }

    /**
     * @covers ::TagLeaderboardQueryTest, ::TagLeaderboardMemberQuery
     */
    public function test_selecting_monthly_top_developers_returns_a_tag_leaderboard_member_query(): void
    {
        $query = $this->query->selectMonthlyTopDevelopers();

        $this->assertInstanceOf(TagLeaderboardMemberQuery::class, $query);
    }

    /**
     * @covers ::TagLeaderboardQueryTest, ::TagLeaderboardMemberQuery
     */
    public function test_selecting_alL_time_top_developers_returns_a_tag_leaderboard_member_query(): void
    {
        $query = $this->query->selectAllTimeTopDevelopers();

        $this->assertInstanceOf(TagLeaderboardMemberQuery::class, $query);
    }
}
