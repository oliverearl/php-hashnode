<?php

namespace Hashnode\Queries\Poll;

use Hashnode\Queries\Query;

class PollOptionQuery extends Query
{
    const OBJECT_NAME = 'PollOption';

    public function selectId(): PollOptionQuery
    {
        $this->selectField('_id');

        return $this;
    }

    public function selectOption(): PollOptionQuery
    {
        $this->selectField('option');

        return $this;
    }

    public function selectVotes(): PollOptionQuery
    {
        $this->selectField('votes');

        return $this;
    }
}
