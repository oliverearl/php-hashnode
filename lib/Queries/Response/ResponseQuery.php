<?php

namespace Hashnode\Queries\Response;

use Hashnode\Arguments\Response\AuthorArgument;
use Hashnode\Arguments\Response\ReactionsArgument;
use Hashnode\Arguments\Response\ReactionsByCurrentUser;
use Hashnode\Arguments\Response\RepliesArgument;
use Hashnode\Queries\Query;
use Hashnode\Queries\Reaction\ReactionQuery;
use Hashnode\Queries\Reaction\ReactionsAndCountQuery;
use Hashnode\Queries\Reply\ReplyQuery;
use Hashnode\Queries\User\UserQuery;

class ResponseQuery extends Query
{
    const OBJECT_NAME = 'Response';

    public function selectId(): ResponseQuery
    {
        $this->selectField('_id');

        return $this;
    }

    public function selectContent(): ResponseQuery
    {
        $this->selectField('content');

        return $this;
    }

    public function selectContentMarkdown(): ResponseQuery
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

    public function selectStamp(): ResponseQuery
    {
        $this->selectField('stamp');

        return $this;
    }

    public function selectPost(): ResponseQuery
    {
        $this->selectField('post');

        return $this;
    }

    public function selectTotalReactions(): ResponseQuery
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

    public function selectBookmarkedIn(): ResponseQuery
    {
        $this->selectField('bookmarkedIn');

        return $this;
    }

    public function selectIsCollapsed(): ResponseQuery
    {
        $this->selectField('isCollapsed');

        return $this;
    }

    public function selectIsActive(): ResponseQuery
    {
        $this->selectField('isActive');

        return $this;
    }

    public function selectDateAdded(): ResponseQuery
    {
        $this->selectField('dateAdded');

        return $this;
    }

    public function selectPopularity(): ResponseQuery
    {
        $this->selectField('popularity');

        return $this;
    }

    public function selectReplies(RepliesArgument $argsObject = null): ReplyQuery
    {
        $object = new ReplyQuery('replies');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectReactionsByCurrentUser(ReactionsByCurrentUser $argsObject = null): ReactionQuery
    {
        $object = new ReactionQuery('reactionsByCurrentUser');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
