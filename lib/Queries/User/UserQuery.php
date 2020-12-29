<?php

namespace Hashnode\Queries\User;

use Hashnode\Arguments\User\FollowersArgument;
use Hashnode\Arguments\User\PublicationArgument;
use Hashnode\Arguments\User\SocialMediaArgument;
use Hashnode\Queries\Publication\PublicationQuery;
use Hashnode\Queries\Query;
use Hashnode\Queries\SocialMedia\SocialMediaQuery;

class UserQuery extends Query
{
    const OBJECT_NAME = 'User';

    public function selectId(): UserQuery
    {
        $this->selectField('_id');

        return $this;
    }

    public function selectUsername(): UserQuery
    {
        $this->selectField('username');

        return $this;
    }

    public function selectName(): UserQuery
    {
        $this->selectField('name');

        return $this;
    }

    public function selectTagline(): UserQuery
    {
        $this->selectField('tagline');

        return $this;
    }

    public function selectIsEvangelist(): UserQuery
    {
        $this->selectField('isEvangelist');

        return $this;
    }

    public function selectDateJoined(): UserQuery
    {
        $this->selectField('dateJoined');

        return $this;
    }

    public function selectSocialMedia(SocialMediaArgument $argsObject = null): SocialMediaQuery
    {
        $object = new SocialMediaQuery('socialMedia');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
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

    public function selectFollowers(FollowersArgument $argsObject = null): UserQuery
    {
        $object = new UserQuery('followers');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectNumFollowing(): UserQuery
    {
        $this->selectField('numFollowing');

        return $this;
    }

    public function selectNumFollowers(): UserQuery
    {
        $this->selectField('numFollowers');

        return $this;
    }

    public function selectIsDeactivated(): UserQuery
    {
        $this->selectField('isDeactivated');

        return $this;
    }

    public function selectLocation(): UserQuery
    {
        $this->selectField('location');

        return $this;
    }

    public function selectPhoto(): UserQuery
    {
        $this->selectField('photo');

        return $this;
    }

    public function selectCoverImage(): UserQuery
    {
        $this->selectField('coverImage');

        return $this;
    }

    public function selectNumPosts(): UserQuery
    {
        $this->selectField('numPosts');

        return $this;
    }

    public function selectNumReactions(): UserQuery
    {
        $this->selectField('numReactions');

        return $this;
    }

    public function selectBlogHandle(): UserQuery
    {
        $this->selectField('blogHandle');

        return $this;
    }

    public function selectPublicationDomain(): UserQuery
    {
        $this->selectField('publicationDomain');

        return $this;
    }
}
