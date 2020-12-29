<?php

namespace Hashnode\Queries\SocialMedia;

use Hashnode\Queries\Query;

class SocialMediaQuery extends Query
{
    const OBJECT_NAME = 'SocialMedia';

    public function selectTwitter(): SocialMediaQuery
    {
        $this->selectField('twitter');

        return $this;
    }

    public function selectGithub(): SocialMediaQuery
    {
        $this->selectField('github');

        return $this;
    }

    public function selectStackoverflow(): SocialMediaQuery
    {
        $this->selectField('stackoverflow');

        return $this;
    }

    public function selectLinkedin(): SocialMediaQuery
    {
        $this->selectField('linkedin');

        return $this;
    }

    public function selectGoogle(): SocialMediaQuery
    {
        $this->selectField('google');

        return $this;
    }

    public function selectWebsite(): SocialMediaQuery
    {
        $this->selectField('website');

        return $this;
    }

    public function selectFacebook(): SocialMediaQuery
    {
        $this->selectField('facebook');

        return $this;
    }
}
