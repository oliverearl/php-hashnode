<?php

namespace Hashnode\Queries\Publication;

use Hashnode\Arguments\Publication\LinksArgument;
use Hashnode\Arguments\Publication\PostsArgument;
use Hashnode\Queries\Links\LinksQuery;
use Hashnode\Queries\Post\PostQuery;
use Hashnode\Queries\Query;

class PublicationQuery extends Query
{
    const OBJECT_NAME = 'Publication';

    public function selectId(): PublicationQuery
    {
        $this->selectField('_id');

        return $this;
    }

    public function selectAuthor(): PublicationQuery
    {
        $this->selectField('author');

        return $this;
    }

    public function selectIsActive(): PublicationQuery
    {
        $this->selectField('isActive');

        return $this;
    }

    public function selectUsername(): PublicationQuery
    {
        $this->selectField('username');

        return $this;
    }

    public function selectHeaderColor(): PublicationQuery
    {
        $this->selectField('headerColor');

        return $this;
    }

    public function selectLogo(): PublicationQuery
    {
        $this->selectField('logo');

        return $this;
    }

    public function selectMetaHTML(): PublicationQuery
    {
        $this->selectField('metaHTML');

        return $this;
    }

    public function selectMeta(): PublicationQuery
    {
        $this->selectField('meta');

        return $this;
    }

    public function selectTitle(): PublicationQuery
    {
        $this->selectField('title');

        return $this;
    }

    public function selectDomain(): PublicationQuery
    {
        $this->selectField('domain');

        return $this;
    }

    public function selectFavicon(): PublicationQuery
    {
        $this->selectField('favicon');

        return $this;
    }

    public function selectDescription(): PublicationQuery
    {
        $this->selectField('description');

        return $this;
    }

    public function selectDisplayTitle(): PublicationQuery
    {
        $this->selectField('displayTitle');

        return $this;
    }

    public function selectOgImage(): PublicationQuery
    {
        $this->selectField('ogImage');

        return $this;
    }

    public function selectEmbedCode(): PublicationQuery
    {
        $this->selectField('embedCode');

        return $this;
    }

    public function selectLayout(): PublicationQuery
    {
        $this->selectField('layout');

        return $this;
    }

    public function selectSitemapSubmitted(): PublicationQuery
    {
        $this->selectField('sitemapSubmitted');

        return $this;
    }

    public function selectTweetedAboutBlog(): PublicationQuery
    {
        $this->selectField('tweetedAboutBlog');

        return $this;
    }

    public function selectFbPixelID(): PublicationQuery
    {
        $this->selectField('fbPixelID');

        return $this;
    }

    public function selectGaTrackingID(): PublicationQuery
    {
        $this->selectField('gaTrackingID');

        return $this;
    }

    public function selectIsAMPEnabled(): PublicationQuery
    {
        $this->selectField('isAMPEnabled');

        return $this;
    }

    public function selectMetaTags(): PublicationQuery
    {
        $this->selectField('metaTags');

        return $this;
    }

    public function selectImprint(): PublicationQuery
    {
        $this->selectField('imprint');

        return $this;
    }

    public function selectImprintMarkdown(): PublicationQuery
    {
        $this->selectField('imprintMarkdown');

        return $this;
    }

    public function selectLinks(LinksArgument $argsObject = null): LinksQuery
    {
        $object = new LinksQuery('links');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }

    public function selectPosts(PostsArgument $argsObject = null): PostQuery
    {
        $object = new PostQuery('posts');

        if (!is_null($argsObject)) {
            $object->appendArguments($argsObject->toArray());
        }

        $this->selectField($object);

        return $object;
    }
}
