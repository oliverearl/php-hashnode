<?php

namespace Hashnode\Arguments;

class RootPostArgument extends Argument
{
    protected ?string $slug;
    protected ?string $hostname;

    public function setSlug (string $slug): RootPostArgument
    {
        $this->slug = $slug;

        return $this;
    }

    public function setHostname (string $hostname): RootPostArgument
    {
        $this->hostname = $hostname;

        return $this;
    }
}
