<?php

namespace Hashnode\Queries\Poll;

use Hashnode\Arguments\Poll\PollOptionsArgument;
use Hashnode\Queries\Query;

class PollQuery extends Query
{
    const OBJECT_NAME = 'Poll';

    public function selectPollOptions(PollOptionsArgument $argsObject = null): PollOptionQuery
    {
        $object = new PollOptionQuery('pollOptions');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectTotalVotes(): PollQuery
    {
        $this->selectField('totalVotes');

        return $this;
    }

    public function selectPollClosingDate(): PollQuery
    {
        $this->selectField('pollClosingDate');

        return $this;
    }

    public function selectPollRunningTime(): PollQuery
    {
        $this->selectField('pollRunningTime');

        return $this;
    }
}
