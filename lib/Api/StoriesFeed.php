<?php

namespace Hashnode\Api;

class StoriesFeed extends Resource
{
    protected array $posts = [];

    public function __construct(array $properties = [])
    {
        foreach($properties as $property) {
            if (is_array($property)) {
                $posts[] = new Post($property);
            }
        }
    }
}
