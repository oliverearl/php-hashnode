<?php

namespace Hashnode\Queries\Tag;

use Hashnode\Arguments\Tag\LeaderboardMemberUserArgument;
use Hashnode\Queries\Query;
use Hashnode\Queries\User\UserQuery;

class TagLeaderboardMemberQuery extends Query
{
    const OBJECT_NAME = 'TagLeaderBoardMember';

    public function selectUser(LeaderboardMemberUserArgument $argsObject = null): UserQuery
    {
        $object = new UserQuery('user');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectAppreciations(): TagLeaderboardMemberQuery
    {
        $this->selectField('appreciations');

        return $this;
    }

    public function selectUpvotes(): TagLeaderboardMemberQuery
    {
        $this->selectField('upvotes');

        return $this;
    }
}
