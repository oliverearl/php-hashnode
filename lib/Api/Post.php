<?php

namespace Hashnode\Api;

class Post extends Resource
{
    protected ?string $_id;
    protected ?int $followersCount;
    protected ?User $author;
    protected ?string $cuid;
    protected ?string $slug;
    protected ?string $title;
    protected ?string $type;
    protected ?float $popularity;
    protected ?Reaction $reactionsByCurrentUser;
    protected ?int $totalReactions;
    protected ?string $bookmarkedIn;
    protected ?bool $partOfPublication;
    protected ?bool $isActive;
    protected ?int $replyCount;
    protected ?int $responseCount;
    protected ?string $dateAdded;
    protected ?string $brief;
    protected ?string $coverImage;
    protected ?bool $isAnonymous;
    protected ?string $dateUpdated;
    protected ?string $dateFeatured;
    protected ?Poll $poll;
    protected ?string $contentMarkdown;
    protected array $reactions = [];
    protected array $tags = [];
    protected array $contributors = [];

    public function __construct(array $properties)
    {
        foreach ($properties as $key => $value) {
            if (is_array($value)) {
                switch ($key) {
                    case 'poll':
                        $this->poll = new Poll($value);
                        break;
                    case 'reactionsByCurrentUser':
                        $this->reactionsByCurrentUser = new Reaction($value);
                        break;
                    case 'author':
                        $this->author = new User($value);
                        break;
                    case 'reactions':
                        foreach ($value as $reaction) {
                            $this->reactions[] = new Reaction($reaction);
                        }
                        break;
                    case 'tags':
                        foreach ($value as $tag) {
                            $this->tags[] = new Tag($tag);
                        }
                        break;
                    case 'contributors':
                        foreach ($value as $contributor) {
                            $this->contributors[] = new Contributor($contributor);
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
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->_id;
    }

    /**
     * @return int|null
     */
    public function getFollowersCount(): ?int
    {
        return $this->followersCount;
    }

    /**
     * @return User|null
     */
    public function getAuthor(): ?User
    {
        return $this->author;
    }

    /**
     * @return string|null
     */
    public function getCuid(): ?string
    {
        return $this->cuid;
    }

    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return float|null
     */
    public function getPopularity(): ?float
    {
        return $this->popularity;
    }

    /**
     * @return Reaction|null
     */
    public function getReactionsByCurrentUser(): ?Reaction
    {
        return $this->reactionsByCurrentUser;
    }

    /**
     * @return int|null
     */
    public function getTotalReactions(): ?int
    {
        return $this->totalReactions;
    }

    /**
     * @return string|null
     */
    public function getBookmarkedIn(): ?string
    {
        return $this->bookmarkedIn;
    }

    /**
     * @return bool|null
     */
    public function getPartOfPublication(): ?bool
    {
        return $this->partOfPublication;
    }

    /**
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @return int|null
     */
    public function getReplyCount(): ?int
    {
        return $this->replyCount;
    }

    /**
     * @return int|null
     */
    public function getResponseCount(): ?int
    {
        return $this->responseCount;
    }

    /**
     * @return string|null
     */
    public function getDateAdded(): ?string
    {
        return $this->dateAdded;
    }

    /**
     * @return string|null
     */
    public function getBrief(): ?string
    {
        return $this->brief;
    }

    /**
     * @return string|null
     */
    public function getCoverImage(): ?string
    {
        return $this->coverImage;
    }

    /**
     * @return bool|null
     */
    public function getIsAnonymous(): ?bool
    {
        return $this->isAnonymous;
    }

    /**
     * @return string|null
     */
    public function getDateUpdated(): ?string
    {
        return $this->dateUpdated;
    }

    /**
     * @return string|null
     */
    public function getDateFeatured(): ?string
    {
        return $this->dateFeatured;
    }

    /**
     * @return Poll|null
     */
    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    /**
     * @return string|null
     */
    public function getContentMarkdown(): ?string
    {
        return $this->contentMarkdown;
    }

    /**
     * @return array
     */
    public function getReactions(): array
    {
        return $this->reactions;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }


    /** @noinspection PhpMissingParentConstructorInspection */

    /**
     * @return array
     */
    public function getContributors(): array
    {
        return $this->contributors;
    }
}
