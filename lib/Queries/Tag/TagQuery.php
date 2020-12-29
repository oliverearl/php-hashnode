<?php

namespace Hashnode\Queries\Tag;

use Hashnode\Arguments\Tag\ContributorArgument;
use Hashnode\Arguments\Tag\LeaderboardArgument;
use Hashnode\Arguments\Tag\ManagerArgument;
use Hashnode\Arguments\Tag\PostsArgument;
use Hashnode\Arguments\Tag\SocialMediaArgument;
use Hashnode\Arguments\Tag\StatsArgument;
use Hashnode\Queries\Contributor\ContributorQuery;
use Hashnode\Queries\Post\PostQuery;
use Hashnode\Queries\Query;

class TagQuery extends Query
{
    const OBJECT_NAME = 'Tag';

    public function selectId(): TagQuery
    {
        $this->selectField('_id');

        return $this;
    }

    public function selectName(): TagQuery
    {
        $this->selectField('name');

        return $this;
    }

    public function selectSlug(): TagQuery
    {
        $this->selectField('slug');

        return $this;
    }

    public function selectIsApproved(): TagQuery
    {
        $this->selectField('isApproved');

        return $this;
    }

    public function selectLogo(): TagQuery
    {
        $this->selectField('logo');

        return $this;
    }

    public function selectIsActive(): TagQuery
    {
        $this->selectField('isActive');

        return $this;
    }

    public function selectNumPosts(): TagQuery
    {
        $this->selectField('numPosts');

        return $this;
    }

    public function selectFollowersCount(): TagQuery
    {
        $this->selectField('followersCount');

        return $this;
    }

    public function selectTagline(): TagQuery
    {
        $this->selectField('tagline');

        return $this;
    }

    public function selectWiki(): TagQuery
    {
        $this->selectField('wiki');

        return $this;
    }

    public function selectWikiMarkdown(): TagQuery
    {
        $this->selectField('wikiMarkdown');

        return $this;
    }

    public function selectStats(StatsArgument $argsObject = null): TagStatsQuery
    {
        $object = new TagStatsQuery('stats');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectLeaderboard(LeaderboardArgument $argsObject = null): TagLeaderboardQuery
    {
        $object = new TagLeaderboardQuery('leaderboard');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectManagers(ManagerArgument $argsObject = null): TagManagerQuery
    {
        $object = new TagManagerQuery('managers');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectSocialMedia(SocialMediaArgument $argsObject = null): TagSocialMediaQuery
    {
        $object = new TagSocialMediaQuery('socialMedia');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectPosts(PostsArgument $argsObject = null): PostQuery
    {
        $object = new PostQuery('posts');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectContributors(ContributorArgument $argsObject = null): ContributorQuery
    {
        $object = new ContributorQuery('contributors');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
