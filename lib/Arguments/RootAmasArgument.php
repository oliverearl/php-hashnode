<?php

namespace Hashnode\Arguments;

class RootAmasArgument extends Argument
{
    protected ?int $page;

    public function setPage(?int $page): RootAmasArgument
    {
        $this->page = $page;

        return $this;
    }
}
