<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Tag\TagManagerQuery;
use Hashnode\Queries\User\UserQuery;
use PHPUnit\Framework\TestCase;

class TagManagerQueryTest extends TestCase
{
    protected TagManagerQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new TagManagerQuery();
    }

    /**
     * @covers ::TagManagerQuery, ::UserQuery
     */
    public function test_selecting_a_user_returns_a_user_query(): void
    {
        $query = $this->query->selectUser();

        $this->assertInstanceOf(UserQuery::class, $query);
    }
}
