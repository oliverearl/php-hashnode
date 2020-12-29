<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Poll\PollOptionQuery;
use Hashnode\Queries\Poll\PollQuery;
use PHPUnit\Framework\TestCase;

class PollQueryTest extends TestCase
{
    protected PollQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new PollQuery();
    }

    /**
     * @covers ::PollQuery, ::PollOptionsQuery
     */
    public function test_selecting_poll_options_returns_a_poll_options_query(): void
    {
        $query = $this->query->selectPollOptions();

        $this->assertInstanceOf(PollOptionQuery::class, $query);
    }
}
