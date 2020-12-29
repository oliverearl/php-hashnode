<?php

namespace Hashnode\Arguments;

class RootUserArgument extends Argument
{
    protected ?string $username;

    public function setUsername(string $username): RootUserArgument
    {
        $this->username = $username;

        return $this;
    }
}
