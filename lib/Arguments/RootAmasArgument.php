<?php

namespace Hashnode\Arguments;

class RootAmasArgument extends Argument
{
    protected ?int $page;

    public function setPage(?int $page = 0): RootAmasArgument
    {
        $this->page = $page;

        return $this;
    }
}
