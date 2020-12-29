<?php

namespace Hashnode\Tests\Unit\Queries;

use Hashnode\Queries\Tag\TagCategoryQuery;
use Hashnode\Queries\Tag\TagQuery;
use PHPUnit\Framework\TestCase;

class TagCategoryQueryTest extends TestCase
{
    protected TagCategoryQuery $query;

    protected function setUp(): void
    {
        parent::setUp();

        $this->query = new TagCategoryQuery();
    }

    /**
     * @covers ::TagCategoryQuery, ::TagQuery
     */
    public function test_selecting_tags_returns_a_tag_query(): void
    {
        $query = $this->query->selectTags();

        $this->assertInstanceOf(TagQuery::class ,$query);
    }
}
