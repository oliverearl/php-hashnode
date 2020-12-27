<?php

namespace Hashnode\Api;

class PollOption extends Resource
{
    protected ?int $_id;
    protected ?string $option;
    protected ?int $votes;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->_id;
    }

    /**
     * @return string|null
     */
    public function getOption(): ?string
    {
        return $this->option;
    }

    /**
     * @return int|null
     */
    public function getVotes(): ?int
    {
        return $this->votes;
    }
}
