<?php

namespace Hashnode\Api;

class Publication extends Resource
{
    protected ?string $_id;
    protected ?string $author;
    protected ?bool $isActive;
    protected ?string $username;
    protected ?string $headerColor;
    protected ?string $logo;
    protected ?string $metaHTML;
    protected ?string $meta;
    protected ?string $title;
    protected ?string $domain;
    protected ?string $favicon;
    protected ?string $description;
    protected ?string $displayTitle;
    protected ?string $ogImage;
    protected ?string $embedCode;
    protected ?string $layout;
    protected ?bool $sitemapSubmitted;
    protected ?bool $tweetedAboutBlog;
    protected ?string $fbPixelID;
    protected ?string $gaTrackingID;
    protected ?bool $isAMPEnabled;
    protected ?string $metaTags;
    protected ?string $imprint;
    protected ?string $imprintMarkdown;

    protected Link $links;
    protected array $posts = [];

    public function __construct(array $properties = [])
    {
        foreach ($properties as $key => $value) {
            if (is_array($value)) {
                switch ($key) {
                    case 'links':
                        $this->setLinks($value);
                        break;
                    case 'posts':
                        $this->setPosts($value);
                        break;
                    default:
                        break;
                }
            } else if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }

    public function setPosts(array $posts): void
    {
        foreach ($posts as $post) {
            $this->posts[] = new Post($post);
        }
    }

    public function setLinks(array $links): void
    {
        $this->links = new Link($links);
    }
}
