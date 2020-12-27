<?php

namespace Hashnode\Api;

class Contributor extends Resource
{
    protected ?User $user;
    protected ?string $stamp;
    protected ?int $_id;
}
