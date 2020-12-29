<?php

namespace Hashnode\Queries\Tag;

use Hashnode\Arguments\Tag\ContributorLeadersAllTimeTopDevelopersArgument;
use Hashnode\Arguments\Tag\ContributorLeadersMonthlyTopDevelopersArgument;
use Hashnode\Queries\Query;

class TagContributorLeadersQuery extends Query
{
    const OBJECT_NAME = 'TagContributorLeaders';

    public function selectMonthlyTopDevelopers(ContributorLeadersMonthlyTopDevelopersArgument $argsObject = null): TagLeaderboardMemberQuery
    {
        $object = new TagLeaderboardMemberQuery('monthlyTopDevelopers');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectAllTimeTopDevelopers(ContributorLeadersAllTimeTopDevelopersArgument $argsObject = null): TagLeaderboardMemberQuery
    {
        $object = new TagLeaderboardMemberQuery('allTimeTopDevelopers');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
