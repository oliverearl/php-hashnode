<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Contributor\ContributorQuery;
use Hashnode\Queries\Poll\PollQuery;
use Hashnode\Queries\PostDetailed\PostDetailedQuery;
use Hashnode\Queries\Publication\PublicationQuery;
use Hashnode\Queries\Reaction\ReactionQuery;
use Hashnode\Queries\Reaction\ReactionsAndCountQuery;
use Hashnode\Queries\Response\ResponseQuery;
use Hashnode\Queries\Tag\TagQuery;
use Hashnode\Queries\User\UserQuery;
use PHPUnit\Framework\TestCase;

class PostDetailedQueryTest extends TestCase
{
    protected PostDetailedQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new PostDetailedQuery();
    }

    /**
     * @covers ::PostDetailedQuery, ::PublicationQuery
     */
    public function test_selecting_a_publication_returns_a_publication_query(): void
    {
        $query = $this->query->selectPublication();

        $this->assertInstanceOf(PublicationQuery::class, $query);
    }

    /**
     * @covers ::PostDetailedQuery, ::TagQuery
     */
    public function test_selecting_tags_returns_a_tag_query(): void
    {
        $query = $this->query->selectTags();

        $this->assertInstanceOf(TagQuery::class, $query);
    }

    /**
     * @covers ::PostDetailedQuery, ::ContributorQuery
     */
    public function test_selecting_contributors_returns_a_contributor_query(): void
    {
        $query = $this->query->selectContributors();

        $this->assertInstanceOf(ContributorQuery::class, $query);
    }

    /**
     * @covers ::PostDetailedQuery, ::ReactionsAndCountQuery
     */
    public function test_selecting_reactions_returns_a_reactions_and_count_query(): void
    {
        $query = $this->query->selectReactions();

        $this->assertInstanceOf(ReactionsAndCountQuery::class, $query);
    }

    /**
     * @covers ::PostDetailedQuery, ::UserQuery
     */
    public function test_selecting_an_author_returns_a_user_query(): void
    {
        $query = $this->query->selectAuthor();

        $this->assertInstanceOf(UserQuery::class, $query);
    }

    /**
     * @covers ::PostDetailedQuery, ::ReactionsQuery
     */
    public function test_selecting_reactions_by_the_current_user_returns_a_reaction_query(): void
    {
        $query = $this->query->selectReactionsByCurrentUser();

        $this->assertInstanceOf(ReactionQuery::class, $query);
    }

    /**
     * @covers ::PostDetailedQuery, ::PollQuery
     */
    public function test_selecting_a_poll_returns_a_poll_query(): void
    {
        $query = $this->query->selectPoll();

        $this->assertInstanceOf(PollQuery::class, $query);
    }

    /**
     * @covers ::PostDetailedQuery, ::ResponseQuery
     */
    public function test_selecting_responses_returns_a_response_query(): void
    {
        $query = $this->query->selectResponses();

        $this->assertInstanceOf(ResponseQuery::class, $query);
    }
}
