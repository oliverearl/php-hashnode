<?php

namespace Hashnode\Api;

class User extends Resource
{
    protected ?string $_id;
    protected ?string $username;
    protected ?string $name;
    protected ?string $tagline;
    protected ?bool $isEvangelist;
    protected ?string $dateJoined;
    protected ?SocialMedia $socialMedia;
    protected ?int $numFollowing;
    protected ?int $numFollowers;
    protected ?bool $isDeactivated;
    protected ?string $location;
    protected ?string $photo;
    protected ?string $coverImage;
    protected ?int $numPosts;
    protected ?int $numReactions;
    protected ?Publication $publication;
    protected ?string $blogHandle;
    protected ?string $publicationDomain;
    protected array $followers = [];

    /** @noinspection PhpMissingParentConstructorInspection */
    public function __construct(array $properties = [])
    {
        foreach ($properties as $key => $value) {
            if (is_array($value)) {
                switch ($key) {
                    case 'socialMedia':
                        $this->socialMedia = new SocialMedia($value);
                        break;
                    case 'publication':
                        $this->publication = new Publication($value);
                        break;
                    case 'followers':
                        foreach ($value as $follower) {
                            $this->followers[] = new User($follower);
                        }
                        break;
                    default:
                        break;
                }
            } else if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTagline(): string
    {
        return $this->tagline;
    }

    /**
     * @return bool
     */
    public function isEvangelist(): bool
    {
        return $this->isEvangelist;
    }

    /**
     * @return string
     */
    public function getDateJoined(): string
    {
        return $this->dateJoined;
    }

    /**
     * @return SocialMedia
     */
    public function getSocialMedia(): ?SocialMedia
    {
        return $this->socialMedia;
    }

    /**
     * @return int
     */
    public function getNumFollowing(): int
    {
        return $this->numFollowing;
    }

    /**
     * @return int
     */
    public function getNumFollowers(): int
    {
        return $this->numFollowers;
    }

    /**
     * @return bool
     */
    public function isDeactivated(): bool
    {
        return $this->isDeactivated;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * @return string
     */
    public function getCoverImage(): string
    {
        return $this->coverImage;
    }

    /**
     * @return int
     */
    public function getNumPosts(): int
    {
        return $this->numPosts;
    }

    /**
     * @return int
     */
    public function getNumReactions(): int
    {
        return $this->numReactions;
    }

    /**
     * @return Publication
     */
    public function getPublication(): Publication
    {
        return $this->publication;
    }

    /**
     * @return string
     */
    public function getBlogHandle(): string
    {
        return $this->blogHandle;
    }

    /**
     * @return string
     */
    public function getPublicationDomain(): string
    {
        return $this->publicationDomain;
    }

    /**
     * @return array
     */
    public function getFollowers(): array
    {
        return $this->followers;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
