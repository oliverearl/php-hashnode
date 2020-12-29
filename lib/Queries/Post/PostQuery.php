<?php

namespace Hashnode\Queries\Post;

use Hashnode\Arguments\Post\AuthorArgument;
use Hashnode\Arguments\Post\ContributorsArgument;
use Hashnode\Arguments\Post\PollArgument;
use Hashnode\Arguments\Post\ReactionsArgument;
use Hashnode\Arguments\Post\ReactionsByCurrentUserArgument;
use Hashnode\Arguments\Post\TagsArgument;
use Hashnode\Queries\Contributor\ContributorQuery;
use Hashnode\Queries\Poll\PollQuery;
use Hashnode\Queries\Query;
use Hashnode\Queries\Reaction\ReactionQuery;
use Hashnode\Queries\Tag\TagQuery;
use Hashnode\Queries\User\UserQuery;

class PostQuery extends Query
{
    const OBJECT_NAME = "Post";

    public function selectId(): PostQuery
    {
        $this->selectField("_id");

        return $this;
    }

    public function selectFollowersCount(): PostQuery
    {
        $this->selectField("followersCount");

        return $this;
    }

    public function selectAuthor(AuthorArgument $argsObject = null): UserQuery
    {
        $object = new UserQuery("author");

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectCuid(): PostQuery
    {
        $this->selectField("cuid");

        return $this;
    }

    public function selectSlug(): PostQuery
    {
        $this->selectField("slug");

        return $this;
    }

    public function selectTitle(): PostQuery
    {
        $this->selectField("title");

        return $this;
    }

    public function selectType(): PostQuery
    {
        $this->selectField("type");

        return $this;
    }

    public function selectPopularity(): PostQuery
    {
        $this->selectField("popularity");

        return $this;
    }

    public function selectReactionsByCurrentUser(ReactionsByCurrentUserArgument $argsObject = null): ReactionQuery
    {
        $object = new ReactionQuery("reactionsByCurrentUser");

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectTotalReactions(): PostQuery
    {
        $this->selectField("totalReactions");

        return $this;
    }

    public function selectBookmarkedIn(): PostQuery
    {
        $this->selectField("bookmarkedIn");

        return $this;
    }

    public function selectPartOfPublication(): PostQuery
    {
        $this->selectField("partOfPublication");

        return $this;
    }

    public function selectContributors(ContributorsArgument $argsObject = null): ContributorQuery
    {
        $object = new ContributorQuery("contributors");

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectIsActive(): PostQuery
    {
        $this->selectField("isActive");

        return $this;
    }

    public function selectReplyCount(): PostQuery
    {
        $this->selectField("replyCount");

        return $this;
    }

    public function selectResponseCount(): PostQuery
    {
        $this->selectField("responseCount");

        return $this;
    }

    public function selectDateAdded(): PostQuery
    {
        $this->selectField("dateAdded");

        return $this;
    }

    public function selectTags(TagsArgument $argsObject = null): TagQuery
    {
        $object = new TagQuery("tags");

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBrief(): PostQuery
    {
        $this->selectField("brief");

        return $this;
    }

    public function selectCoverImage(): PostQuery
    {
        $this->selectField("coverImage");

        return $this;
    }

    public function selectIsAnonymous(): PostQuery
    {
        $this->selectField("isAnonymous");

        return $this;
    }

    public function selectDateUpdated(): PostQuery
    {
        $this->selectField("dateUpdated");

        return $this;
    }

    public function selectDateFeatured(): PostQuery
    {
        $this->selectField("dateFeatured");

        return $this;
    }

    public function selectReactions(ReactionsArgument $argsObject = null): ReactionQuery
    {
        $object = new ReactionQuery("reactions");

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectPoll(PollArgument $argsObject = null): PollQuery
    {
        $object = new PollQuery("poll");

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectContentMarkdown(): PostQuery
    {
        $this->selectField("contentMarkdown");

        return $this;
    }
}
