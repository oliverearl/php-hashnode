<?php

namespace Hashnode\Queries\Tag;

use Hashnode\Arguments\Tag\ManagerArgument;
use Hashnode\Queries\Query;
use Hashnode\Queries\User\UserQuery;

class TagManagerQuery extends Query
{
    const OBJECT_NAME = 'TagManager';

    public function selectId(): TagManagerQuery
    {
        $this->selectField('_id');

        return $this;
    }

    public function selectRole(): TagManagerQuery
    {
        $this->selectField('role');

        return $this;
    }

    public function selectUser(ManagerArgument $argsObject = null): UserQuery
    {
        $object = new UserQuery('user');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
