<?php

namespace Hashnode\Api;

class PostDetailed extends Post
{
    protected ?bool $sourcedFromGithub;
    protected ?bool $isRepublished;
    protected ?int $numCollapsed;
    protected ?bool $isDelisted;
    protected ?bool $isFeatured;
    protected ?string $content;

    protected array $responses = [];
}
