<?php

namespace Hashnode\Api;

use Hashnode\Client;

abstract class Resource
{
    public function toArray(): array
    {
        $array = get_object_vars($this);
        foreach ($array as $key => $value) {
            if (is_subclass_of($value, Resource::class)) {
                $array[$key] = $value->toArray();
            }
        }
        return $array;
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}
