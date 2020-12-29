<?php

namespace Hashnode\Queries\Tag;

use Hashnode\Queries\Query;

class TagSocialMediaQuery extends Query
{
    const OBJECT_NAME = 'TagSocialMedia';

    public function selectGithub(): TagSocialMediaQuery
    {
        $this->selectField('github');

        return $this;
    }

    public function selectTwitter(): TagSocialMediaQuery
    {
        $this->selectField('twitter');

        return $this;
    }

    public function selectOfficialWebsite(): TagSocialMediaQuery
    {
        $this->selectField('officialWebsite');

        return $this;
    }
}
