<?php

namespace Hashnode\Api;

class Poll extends Resource
{
    protected ?PollOption $pollOptions;
    protected ?int $_id;
    protected ?int $totalVotes;
    protected ?string $pollClosingDate;
    protected ?string $pollRunningTime;

    /**
     * @return PollOption|null
     */
    public function getPollOptions(): ?PollOption
    {
        return $this->pollOptions;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->_id;
    }

    /**
     * @return int|null
     */
    public function getTotalVotes(): ?int
    {
        return $this->totalVotes;
    }

    /**
     * @return string|null
     */
    public function getPollClosingDate(): ?string
    {
        return $this->pollClosingDate;
    }

    /**
     * @return string|null
     */
    public function getPollRunningTime(): ?string
    {
        return $this->pollRunningTime;
    }
}
