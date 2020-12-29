<?php

namespace Hashnode;

use GraphQL\Client;
use Psr\Http\Client\ClientInterface;

class Hashnode extends Client
{
    public const DEFAULT_ENDPOINT = 'https://api.hashnode.com';
    public const DEFAULT_API_KEY = '';

    public function __construct(
        string $endpointUrl = self::DEFAULT_ENDPOINT,
        array $authorizationHeaders = [
            'Authorization' => self::DEFAULT_API_KEY
        ],
        array $httpOptions = [],
        ClientInterface $httpClient = null,
        string $requestMethod = 'POST'
    )
    {
        parent::__construct($endpointUrl, $authorizationHeaders, $httpOptions, $httpClient, $requestMethod);
    }
}
