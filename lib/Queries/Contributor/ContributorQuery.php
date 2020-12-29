<?php

namespace Hashnode\Queries\Contributor;

use Hashnode\Arguments\Contributor\UserArgument;
use Hashnode\Queries\Query;
use Hashnode\Queries\User\UserQuery;

class ContributorQuery extends Query
{
    const OBJECT_NAME = 'Contributor';

    public function selectUser(UserArgument $argsObject = null): UserQuery
    {
        $object = new UserQuery('user');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectStamp(): ContributorQuery
    {
        $this->selectField('stamp');

        return $this;
    }

    public function selectId(): ContributorQuery
    {
        $this->selectField('id');

        return $this;
    }
}
