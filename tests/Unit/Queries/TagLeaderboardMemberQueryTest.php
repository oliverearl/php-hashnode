<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Tag\TagLeaderboardMemberQuery;
use Hashnode\Queries\User\UserQuery;
use PHPUnit\Framework\TestCase;

class TagLeaderboardMemberQueryTest extends TestCase
{
    protected TagLeaderboardMemberQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new TagLeaderboardMemberQuery();
    }

    /**
     * @covers ::TagLeaderboardMemberQuery, ::UserQuery
     */
    public function test_selecting_a_user_returns_a_user_query(): void
    {
        $query = $this->query->selectUser();

        $this->assertInstanceOf(UserQuery::class, $query);
    }
}
