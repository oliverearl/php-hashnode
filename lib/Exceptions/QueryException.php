<?php

namespace Hashnode\Exceptions;

use GraphQL\Exception\QueryError;

class QueryException extends QueryError
{
    public function details(): array
    {
        return $this->getErrorDetails();
    }

    public function dump(): void
    {
        print_r($this->details());
    }
}
