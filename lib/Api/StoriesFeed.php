<?php

namespace Hashnode\Api;

class StoriesFeed extends Resource
{
    protected array $posts = [];

    /** @noinspection PhpMissingParentConstructorInspection */
    public function __construct(array $properties = [])
    {
        $this->posts = $properties;
    }

    public function getPosts(): array
    {
        return $this->posts;
    }
}
