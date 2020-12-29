<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Contributor\ContributorQuery;
use Hashnode\Queries\User\UserQuery;
use PHPUnit\Framework\TestCase;

class ContributorQueryTest extends TestCase
{
    protected ContributorQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new ContributorQuery();
    }

    /**
     * @covers ::ContributorQuery, ::UserQuery
     */
    public function test_selecting_a_user_returns_a_user_query(): void
    {
        $query = $this->query->selectUser();

        $this->assertInstanceOf(UserQuery::class, $query);
    }
}
