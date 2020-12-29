<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Tag\TagContributorLeadersQuery;
use Hashnode\Queries\Tag\TagContributorsQuery;
use Hashnode\Queries\Tag\TagManagerQuery;
use PHPUnit\Framework\TestCase;

class TagContributorsQueryTest extends TestCase
{
    protected TagContributorsQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new TagContributorsQuery();
    }

    /**
     * @covers ::TagContributorsQuery, ::TagManagerQuery
     */
    public function test_selecting_managers_returns_a_tag_manager_query(): void
    {
        $query = $this->query->selectManagers();

        $this->assertInstanceOf(TagManagerQuery::class, $query);
    }

    /**
     * @covers ::TagContributorsQuery, ::TagContributorLeadersQuery
     */
    public function test_selecting_leaders_returns_a_tag_contributor_leaders_query(): void
    {
        $query = $this->query->selectLeaders();

        $this->assertInstanceOf(TagContributorLeadersQuery::class, $query);
    }
}
