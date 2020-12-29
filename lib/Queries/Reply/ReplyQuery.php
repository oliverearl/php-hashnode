<?php

namespace Hashnode\Queries\Reply;

use Hashnode\Arguments\Reply\AuthorArgument;
use Hashnode\Arguments\Reply\ReactionsArgument;
use Hashnode\Arguments\Reply\ReactionsByCurrentUserArgument;
use Hashnode\Queries\Query;
use Hashnode\Queries\Reaction\ReactionQuery;
use Hashnode\Queries\Reaction\ReactionsAndCountQuery;
use Hashnode\Queries\User\UserQuery;

class ReplyQuery extends Query
{
    const OBJECT_NAME = 'Reply';

    public function selectId(): ReplyQuery
    {
        $this->selectField('_id');

        return $this;
    }

    public function selectContent(): ReplyQuery
    {
        $this->selectField('content');

        return $this;
    }

    public function selectContentMarkdown(): ReplyQuery
    {
        $this->selectField('contentMarkdown');

        return $this;
    }

    public function selectAuthor(AuthorArgument $argsObject = null): UserQuery
    {
        $object = new UserQuery('author');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectDateAdded(): ReplyQuery
    {
        $this->selectField('dateAdded');

        return $this;
    }

    public function selectIsActive(): ReplyQuery
    {
        $this->selectField('isActive');

        return $this;
    }

    public function selectStamp(): ReplyQuery
    {
        $this->selectField('stamp');

        return $this;
    }

    public function selectTotalReactions(): ReplyQuery
    {
        $this->selectField('totalReactions');

        return $this;
    }

    public function selectReactions(ReactionsArgument $argsObject = null): ReactionsAndCountQuery
    {
        $object = new ReactionsAndCountQuery('reactions');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectReactionsByCurrentUser(ReactionsByCurrentUserArgument $argsObject = null): ReactionQuery
    {
        $object = new ReactionQuery('reactionsByCurrentUser');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
