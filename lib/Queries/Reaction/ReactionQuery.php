<?php

namespace Hashnode\Queries\Reaction;

use Hashnode\Queries\Query;

class ReactionQuery extends Query
{
    const OBJECT_NAME = 'Reaction';

    public function selectImage(): ReactionQuery
    {
        $this->selectField('image');

        return $this;
    }

    public function selectName(): ReactionQuery
    {
        $this->selectField('name');

        return $this;
    }
}
