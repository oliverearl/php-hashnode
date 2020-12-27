<?php

namespace Hashnode\Api;

class Link
{
    protected ?string $hashnode;
    protected ?string $website;
    protected ?string $github;
    protected ?string $twitter;

    /**
     * @return string
     */
    public function getHashnode(): string
    {
        return $this->hashnode;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
    }

    /**
     * @return string
     */
    public function getGithub(): string
    {
        return $this->github;
    }

    /**
     * @return string
     */
    public function getTwitter(): string
    {
        return $this->twitter;
    }
}
