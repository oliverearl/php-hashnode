<?php

namespace Hashnode\Api;

class Publication extends Resource
{
    protected string $id;
    protected string $author;
    protected bool $isActive;
    protected string $username;
    protected string $headerColor;
    protected string $logo;
    protected string $metaHTML;
    protected string $meta;
    protected string $title;
    protected string $domain;
    protected string $favicon;
    protected string $description;
    protected string $displayTitle;
    protected string $ogImage;
    protected string $embedCode;
    protected string $layout;
    protected bool $sitemapSubmitted;
    protected bool $tweetedAboutBlog;
    protected string $fbPpixelId;
    protected string $gaTrackingId;
    protected bool $isAMPEnabled;
    protected string $metaTags;
    protected string $imprint;
    protected string $imprintMarkdown;
    protected array $links;
    protected array $posts;

    public function __construct(array $properties)
    {
        foreach ($properties as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }
}
