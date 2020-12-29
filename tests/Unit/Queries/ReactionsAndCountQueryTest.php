<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Reaction\ReactionQuery;
use Hashnode\Queries\Reaction\ReactionsAndCountQuery;
use PHPUnit\Framework\TestCase;

class ReactionsAndCountQueryTest extends TestCase
{
    protected ReactionsAndCountQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new ReactionsAndCountQuery();
    }

    /**
     * @covers ::ReactionsAndCountQuery, ::ReactionQuery
     */
    public function test_selecting_a_reaction_returns_a_reaction_query(): void
    {
        $query = $this->query->selectReaction();

        $this->assertInstanceOf(ReactionQuery::class, $query);
    }
}
