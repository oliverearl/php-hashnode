<?php

namespace Hashnode\Arguments\PostDetailed;

use Hashnode\Arguments\Argument;

class ResponsesArgument extends Argument
{
    protected ?int $page;

    public function setPage(?int $page): ResponsesArgument
    {
        $this->page = $page;

        return $this;
    }
}
