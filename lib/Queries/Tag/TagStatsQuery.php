<?php

namespace Hashnode\Queries\Tag;

use Hashnode\Queries\Query;

class TagStatsQuery extends Query
{
    const OBJECT_NAME = "TagStats";

    public function selectCurrentWeekPostsCount(): TagStatsQuery
    {
        $this->selectField("currentWeekPostsCount");

        return $this;
    }

    public function selectLastWeekPostsCount(): TagStatsQuery
    {
        $this->selectField("lastWeekPostsCount");

        return $this;
    }

    public function selectCurrentWeekFollowersCount(): TagStatsQuery
    {
        $this->selectField("currentWeekFollowersCount");

        return $this;
    }

    public function selectLastWeekFollowersCount(): TagStatsQuery
    {
        $this->selectField("lastWeekFollowersCount");

        return $this;
    }
}
