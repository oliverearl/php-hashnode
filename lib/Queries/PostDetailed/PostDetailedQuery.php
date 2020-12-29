<?php

namespace Hashnode\Queries\PostDetailed;

use Hashnode\Arguments\PostDetailed\AuthorArgument;
use Hashnode\Arguments\PostDetailed\ContributorsArgument;
use Hashnode\Arguments\PostDetailed\PollArgument;
use Hashnode\Arguments\PostDetailed\PublicationArgument;
use Hashnode\Arguments\PostDetailed\ReactionsArgument;
use Hashnode\Arguments\PostDetailed\ReactionsByCurrentUserArgument;
use Hashnode\Arguments\PostDetailed\ResponsesArgument;
use Hashnode\Arguments\PostDetailed\TagsArgument;
use Hashnode\Queries\Contributor\ContributorQuery;
use Hashnode\Queries\Poll\PollQuery;
use Hashnode\Queries\Publication\PublicationQuery;
use Hashnode\Queries\Query;
use Hashnode\Queries\Reaction\ReactionQuery;
use Hashnode\Queries\Reaction\ReactionsAndCountQuery;
use Hashnode\Queries\Response\ResponseQuery;
use Hashnode\Queries\Tag\TagQuery;
use Hashnode\Queries\User\UserQuery;

class PostDetailedQuery extends Query
{
    const OBJECT_NAME = 'PostDetailed';

    public function selectId(): PostDetailedQuery
    {
        $this->selectField('_id');

        return $this;
    }

    public function selectSourcedFromGithub(): PostDetailedQuery
    {
        $this->selectField('sourcedFromGithub');

        return $this;
    }

    public function selectIsRepublished(): PostDetailedQuery
    {
        $this->selectField('isRepublished');

        return $this;
    }

    public function selectFollowersCount(): PostDetailedQuery
    {
        $this->selectField('followersCount');

        return $this;
    }

    public function selectCuid(): PostDetailedQuery
    {
        $this->selectField('cuid');

        return $this;
    }

    public function selectSlug(): PostDetailedQuery
    {
        $this->selectField('slug');

        return $this;
    }

    public function selectTitle(): PostDetailedQuery
    {
        $this->selectField('title');

        return $this;
    }

    public function selectType(): PostDetailedQuery
    {
        $this->selectField('type');

        return $this;
    }

    public function selectPartOfPublication(): PostDetailedQuery
    {
        $this->selectField('partOfPublication');

        return $this;
    }

    public function selectPublication(PublicationArgument $argsObject = null): PublicationQuery
    {
        $object = new PublicationQuery('publication');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectDateUpdated(): PostDetailedQuery
    {
        $this->selectField('dateUpdated');

        return $this;
    }

    public function selectTotalReactions(): PostDetailedQuery
    {
        $this->selectField('totalReactions');

        return $this;
    }

    public function selectNumCollapsed(): PostDetailedQuery
    {
        $this->selectField('numCollapsed');

        return $this;
    }

    public function selectIsDelisted(): PostDetailedQuery
    {
        $this->selectField('isDelisted');

        return $this;
    }

    public function selectIsFeatured(): PostDetailedQuery
    {
        $this->selectField('isFeatured');

        return $this;
    }

    public function selectIsActive(): PostDetailedQuery
    {
        $this->selectField('isActive');

        return $this;
    }

    public function selectReplyCount(): PostDetailedQuery
    {
        $this->selectField('replyCount');

        return $this;
    }

    public function selectResponseCount(): PostDetailedQuery
    {
        $this->selectField('responseCount');

        return $this;
    }

    public function selectPopularity(): PostDetailedQuery
    {
        $this->selectField('popularity');

        return $this;
    }

    public function selectDateAdded(): PostDetailedQuery
    {
        $this->selectField('dateAdded');

        return $this;
    }

    public function selectContentMarkdown(): PostDetailedQuery
    {
        $this->selectField('contentMarkdown');

        return $this;
    }

    public function selectContent(): PostDetailedQuery
    {
        $this->selectField('content');

        return $this;
    }

    public function selectBrief(): PostDetailedQuery
    {
        $this->selectField('brief');

        return $this;
    }

    public function selectCoverImage(): PostDetailedQuery
    {
        $this->selectField('coverImage');

        return $this;
    }

    public function selectIsAnonymous(): PostDetailedQuery
    {
        $this->selectField('isAnonymous');

        return $this;
    }

    public function selectTags(TagsArgument $argsObject = null): TagQuery
    {
        $object = new TagQuery('tags');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectUntaggedFrom(): PostDetailedQuery
    {
        $this->selectField('untaggedFrom');

        return $this;
    }

    public function selectContributors(ContributorsArgument $argsObject = null): ContributorQuery
    {
        $object = new ContributorQuery('contributors');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectBookmarkedIn(): PostDetailedQuery
    {
        $this->selectField('bookmarkedIn');

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

    public function selectAuthor(AuthorArgument $argsObject = null): UserQuery
    {
        $object = new UserQuery('author');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectReactionsByCurrentUser(ReactionsByCurrentUserArgument $argsObject = null): ReactionQuery
    {
        $object = new ReactionQuery('reactionsByCurrentUser');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPoll(PollArgument $argsObject = null): PollQuery
    {
        $object = new PollQuery('poll');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectResponses(ResponsesArgument $argsObject = null): ResponseQuery
    {
        $object = new ResponseQuery('responses');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
