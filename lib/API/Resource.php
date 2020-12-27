<?php

namespace Hashnode\Api;

use Hashnode\Client;

abstract class Resource
{
    public function toArray(): array
    {
        $array = get_object_vars($this);
        return $this->arrayBuilder($array);
    }

    protected function arrayBuilder(array $array): array
    {
        foreach ($array as $key => $value) {
            if (is_subclass_of($value, Resource::class)) {
                $array[$key] = $this->arrayBuilder(get_object_vars($value));
            } else if (is_array($value)) {
                $array[$key] = $this->arrayBuilder($value);
            }
        }
        return $array;
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public function getProperties(): array
    {
        $array = [];
        $class = get_class($this);

        foreach (array_keys(get_class_vars($class)) as $var) {
            $array[] = $var;
        }
        return $array;
    }
}
