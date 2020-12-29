<?php

namespace Hashnode\Queries\Tag;

use Hashnode\Arguments\Tag\ContributorArgument;
use Hashnode\Arguments\Tag\ContributorsLeadersArgument;
use Hashnode\Queries\Query;

class TagContributorsQuery extends Query
{
    const OBJECT_NAME = 'TagContributors';

    public function selectManagers(ContributorArgument $argsObject = null): TagManagerQuery
    {
        $object = new TagManagerQuery('managers');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectLeaders(ContributorsLeadersArgument $argsObject = null): TagContributorLeadersQuery
    {
        $object = new TagContributorLeadersQuery('leaders');
        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
