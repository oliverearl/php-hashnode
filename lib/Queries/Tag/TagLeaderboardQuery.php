<?php

namespace Hashnode\Queries\Tag;

use Hashnode\Arguments\Tag\LeaderboardAllTimeTopDevelopersArgument;
use Hashnode\Arguments\Tag\LeaderboardMonthlyTopDevelopersArgument;
use Hashnode\Queries\Query;

class TagLeaderboardQuery extends Query
{
    const OBJECT_NAME = 'TagLeaderBoard';

    public function selectMonthlyTopDevelopers(LeaderboardMonthlyTopDevelopersArgument $argsObject = null): TagLeaderboardMemberQuery
    {
        $object = new TagLeaderboardMemberQuery("monthlyTopDevelopers");

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectAllTimeTopDevelopers(LeaderboardAllTimeTopDevelopersArgument $argsObject = null): TagLeaderboardMemberQuery
    {
        $object = new TagLeaderboardMemberQuery("allTimeTopDevelopers");

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
