<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Contributor\ContributorQuery;
use Hashnode\Queries\Poll\PollQuery;
use Hashnode\Queries\Post\PostQuery;
use Hashnode\Queries\Reaction\ReactionQuery;
use Hashnode\Queries\Tag\TagQuery;
use Hashnode\Queries\User\UserQuery;
use PHPUnit\Framework\TestCase;

class PostQueryTest extends TestCase
{
    protected PostQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new PostQuery();
    }

    /**
     * @covers ::PostQuery, ::UserQuery
     */
    public function test_selecting_an_author_returns_a_user_query(): void
    {
        $query = $this->query->selectAuthor();

        $this->assertInstanceOf(UserQuery::class, $query);
    }

    /**
     * @covers ::PostQuery, ::ReactionQuery
     */
    public function test_selecting_reactions_by_a_current_user_returns_a_reaction_query(): void
    {
        $query = $this->query->selectReactionsByCurrentUser();

        $this->assertInstanceOf(ReactionQuery::class, $query);
    }

    /**
     * @covers ::PostQuery, ::ContributorQuery
     */
    public function test_selecting_contributors_returns_a_contributor_query(): void
    {
        $query = $this->query->selectContributors();

        $this->assertInstanceOf(ContributorQuery::class, $query);
    }

    /**
     * @covers ::PostQuery, ::ContributorQuery
     */
    public function test_selecting_tags_returns_a_tag_query(): void
    {
        $query = $this->query->selectTags();

        $this->assertInstanceOf(TagQuery::class, $query);
    }

    /**
     * @covers ::PostQuery, ::ReactionQuery
     */
    public function test_selecting_reactions_returns_a_reaction_query(): void
    {
        $query = $this->query->selectReactions();

        $this->assertInstanceOf(ReactionQuery::class, $query);
    }

    /**
     * @covers ::PostQuery, ::PollQuery
     */
    public function test_selecting_a_poll_returns_a_poll_query(): void
    {
        $query = $this->query->selectPoll();

        $this->assertInstanceOf(PollQuery::class, $query);
    }
}
