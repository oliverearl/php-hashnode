<?php

namespace Hashnode\Queries\Tag;

use Hashnode\Arguments\Tag\CategoryTagsArgument;
use Hashnode\Queries\Query;

class TagCategoryQuery extends Query
{
    const OBJECT_NAME = 'TagCategory';

    public function selectId(): TagCategoryQuery
    {
        $this->selectField('_id');

        return $this;
    }

    public function selectName(): TagCategoryQuery
    {
        $this->selectField('name');

        return $this;
    }

    public function selectIsActive(): TagCategoryQuery
    {
        $this->selectField('isActive');

        return $this;
    }

    public function selectPriority(): TagCategoryQuery
    {
        $this->selectField('priority');

        return $this;
    }

    public function selectSlug(): TagCategoryQuery
    {
        $this->selectField('slug');

        return $this;
    }

    public function selectTags(CategoryTagsArgument $argsObject = null): TagQuery
    {
        $object = new TagQuery('tags');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
