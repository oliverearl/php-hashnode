<?php

namespace Hashnode\Arguments\Publication;

use Hashnode\Arguments\Argument;

class PostsArgument extends Argument
{
    protected ?int $page;

    public function setPage(?int $page): PostsArgument
    {
        $this->page = $page;

        return $this;
    }
}
