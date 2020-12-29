<?php

namespace Hashnode\Queries;

use Hashnode\Arguments\RootAmasArgument;
use Hashnode\Arguments\RootPostArgument;
use Hashnode\Arguments\RootStoriesFeedArgument;
use Hashnode\Arguments\RootTagCategoriesArgument;
use Hashnode\Arguments\RootUserArgument;
use Hashnode\Queries\Post\PostQuery;
use Hashnode\Queries\PostDetailed\PostDetailedQuery;
use Hashnode\Queries\Tag\TagCategoryQuery;
use Hashnode\Queries\User\UserQuery;

class RootQuery extends Query
{
    const OBJECT_NAME = '';

    public function selectUser(RootUserArgument $argsObject = null): UserQuery
    {
        $object = new UserQuery('user');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectStoriesFeed(RootStoriesFeedArgument $argsObject = null): PostQuery
    {
        $object = new PostQuery('storiesFeed');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectAmas(RootAmasArgument $argsObject = null): PostQuery
    {
        $object = new PostQuery('amas');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectPost(RootPostArgument $argsObject = null): PostDetailedQuery
    {
        $object = new PostDetailedQuery('post');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectTagCategories(RootTagCategoriesArgument $argsObject = null): TagCategoryQuery
    {
        $object = new TagCategoryQuery('tagCategories');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
