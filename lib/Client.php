<?php

namespace Hashnode;

use GraphQL\Client as GraphQLClient;

class Client
{
    const HASHNODE_API_ENDPOINT = 'https://api.hashnode.com';
    const HASHNODE_API_VERSION = '1.0.0';

    private static $instance;
    private $apiKey;
    private $apiEndpoint;
    private $apiVersion;
    private $gqlClient;

    private function __construct(?string $apiKey = null,
                                 ?string $apiEndpoint = null,
                                 ?string $apiVersion = null)
    {
        $this->apiKey = $apiKey ?: '';
        $this->apiEndpoint = $apiEndpoint ?: self::HASHNODE_API_ENDPOINT;
        $this->apiVersion = $apiVersion ?: self::HASHNODE_API_VERSION;

        $this->gqlClient = new GraphQLClient(
            $this->apiEndpoint,
            ['Authorization' => $this->apiKey]
        );
    }

    public static function getInstance(?string $key = null, ?string $endpoint = null, ?string $version = null): Client
    {
        if (!self::$instance) {
            self::$instance = new Client($key, $endpoint, $version);
        }
        return self::$instance;
    }

    public static function destroyInstance(): void
    {
        self::$instance = null;
    }

    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getApiEndpoint(): string
    {
        return $this->apiEndpoint;
    }

    public function getRawAccess(): GraphQLClient
    {
        return $this->gqlClient;
    }
}
