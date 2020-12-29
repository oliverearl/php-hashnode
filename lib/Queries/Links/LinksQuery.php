<?php

namespace Hashnode\Queries\Links;

use Hashnode\Queries\Query;

class LinksQuery extends Query
{
    const OBJECT_NAME = 'Links';

    public function selectHashnode(): LinksQuery
    {
        $this->selectField('hashnode');

        return $this;
    }

    public function selectWebsite(): LinksQuery
    {
        $this->selectField('website');

        return $this;
    }

    public function selectGithub(): LinksQuery
    {
        $this->selectField('github');

        return $this;
    }

    public function selectTwitter(): LinksQuery
    {
        $this->selectField('twitter');

        return $this;
    }
}
