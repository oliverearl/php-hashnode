<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Reaction\ReactionsAndCountQuery;
use Hashnode\Queries\Reply\ReplyQuery;
use Hashnode\Queries\Response\ResponseQuery;
use Hashnode\Queries\User\UserQuery;
use PHPUnit\Framework\TestCase;

class ResponseQueryTest extends TestCase
{
    protected ResponseQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new ResponseQuery();
    }

    /**
     * @covers ::ResponseQuery, ::UserQuery
     */
    public function test_selecting_an_author_returns_a_user_query(): void
    {
        $query = $this->query->selectAuthor();

        $this->assertInstanceOf(UserQuery::class, $query);
    }

    /**
     * @covers ::ResponseQuery, ::ReactionsAndCountQuery
     */
    public function test_selecting_reactions_returns_a_reactions_and_count_query(): void
    {
        $query = $this->query->selectReactions();

        $this->assertInstanceOf(ReactionsAndCountQuery::class, $query);
    }

    /**
     * @covers ::ResponseQuery, ::ReplyQuery
     */
    public function test_selecting_replies_returns_a_reply_query(): void
    {
        $query = $this->query->selectReplies();

        $this->assertInstanceOf(ReplyQuery::class, $query);
    }

    /**
     * @covers ::ResponseQuery, ::ReactionsQuery
     */
    public function test_selecting_reactions_by_the_current_user_returns_a_reaction_query(): void
    {
        $query = $this->query->selectReactionsByCurrentUser();

        $this->assertInstanceOf(ResponseQuery::class, $query);
    }
}
