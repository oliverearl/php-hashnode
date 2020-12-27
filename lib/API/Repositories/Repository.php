<?php

namespace Hashnode\Api\Repositories;

use Hashnode\Client;

abstract class Repository
{
    protected Client $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: Client::getInstance();
    }

    public function getClient(): Client
    {
        return $this->client;
    }
}
