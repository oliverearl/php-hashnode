<?php

namespace Hashnode\Queries\Reaction;

use Hashnode\Arguments\Reactions\ReactionsAndCountReactionArgument;
use Hashnode\Queries\Query;

class ReactionsAndCountQuery extends Query
{
    const OBJECT_NAME = "ReactionsAndCount";

    public function selectReaction(ReactionsAndCountReactionArgument $argsObject = null): ReactionQuery
    {
        $object = new ReactionQuery("reaction");

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectCount(): ReactionsAndCountQuery
    {
        $this->selectField("count");

        return $this;
    }
}
