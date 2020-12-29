<?php

namespace Hashnode\Arguments;

use GraphQL\RawObject;
use Hashnode\Enums\FeedTypeEnum;

class RootStoriesFeedArgument extends Argument
{
    protected RawObject $type;
    protected ?int $page;

    public function setType(string $feedType = FeedTypeEnum::NEW): RootStoriesFeedArgument
    {
        $this->type = new RawObject($feedType);

        return $this;
    }

    public function setPage(int $page = 0): RootStoriesFeedArgument
    {
        $this->page = $page;

        return $this;
    }
}
