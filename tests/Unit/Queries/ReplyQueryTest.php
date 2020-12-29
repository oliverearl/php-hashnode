<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Reaction\ReactionQuery;
use Hashnode\Queries\Reaction\ReactionsAndCountQuery;
use Hashnode\Queries\Reply\ReplyQuery;
use PHPUnit\Framework\TestCase;

class ReplyQueryTest extends TestCase
{
    protected ReplyQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new ReplyQuery();
    }

    /**
     * @covers ::ReplyQuery, ::ReactionsAndCountQuery
     */
    public function test_selecting_reactions_returns_a_reactions_and_count_query(): void
    {
        $query = $this->query->selectReactions();

        $this->assertInstanceOf(ReactionsAndCountQuery::class, $query);
    }

    /**
     * @covers ::ReplyQuery, ::ReactionQuery
     */
    public function test_selecting_reactions_by_the_current_user_returns_a_reaction_query(): void
    {
        $query = $this->query->selectReactionsByCurrentUser();

        $this->assertInstanceOf(ReactionQuery::class, $query);
    }
}
