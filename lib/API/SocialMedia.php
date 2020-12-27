<?php

namespace Hashnode\Api;

class SocialMedia extends Resource
{
    protected ?string $twitter;
    protected ?string $github;
    protected ?string $stackoverflow;
    protected ?string $linkedin;
    protected ?string $google;
    protected ?string $website;
    protected ?string $facebook;

    /**
     * @return string
     */
    public function getTwitter(): string
    {
        return $this->twitter;
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
    public function getStackoverflow(): string
    {
        return $this->stackoverflow;
    }

    /**
     * @return string
     */
    public function getLinkedin(): string
    {
        return $this->linkedin;
    }

    /**
     * @return string
     */
    public function getGoogle(): string
    {
        return $this->google;
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
    public function getFacebook(): string
    {
        return $this->facebook;
    }
}
