<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Tag\TagContributorLeadersQuery;
use Hashnode\Queries\Tag\TagLeaderboardMemberQuery;
use PHPUnit\Framework\TestCase;

class TagContributorLeadersQueryTest extends TestCase
{
    protected TagContributorLeadersQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new TagContributorLeadersQuery();
    }

    /**
     * @covers ::TagContributorLeadersQuery, ::TagLeaderboardMemberQuery
     */
    public function test_selecting_monthly_top_developers_returns_a_tag_leaderboard_member_query(): void
    {
        $query = $this->query->selectMonthlyTopDevelopers();

        $this->assertInstanceOf(TagLeaderboardMemberQuery::class, $query);
    }

    /**
     * @covers ::TagContributorLeadersQuery, ::TagLeaderboardMemberQuery
     */
    public function test_selecting_all_time_top_developers_returns_a_tag_leaderboard_member_query(): void
    {
        $query = $this->query->selectAllTimeTopDevelopers();

        $this->assertInstanceOf(TagLeaderboardMemberQuery::class, $query);
    }
}
