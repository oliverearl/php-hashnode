<?php

namespace Hashnode\Arguments\Tag;

use GraphQL\RawObject;
use Hashnode\Arguments\Argument;

class PostsArgument extends Argument
{
    protected ?RawObject $filter;
    protected ?int $page;

    public function setFilter(string $tagsPostFilter): PostsArgument
    {
        $this->filter = new RawObject($tagsPostFilter);

        return $this;
    }

    public function setPage(int $page): PostsArgument
    {
        $this->page = $page;

        return $this;
    }
}
