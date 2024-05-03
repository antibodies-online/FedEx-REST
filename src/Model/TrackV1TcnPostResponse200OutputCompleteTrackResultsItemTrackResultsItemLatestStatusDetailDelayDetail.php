<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailDelayDetail extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Specifies the type of delay.
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies the subType of delay.
     *
     * @var string
     */
    protected $subType;
    /**
     * Specifies the status of package indicating whether a package is arriving early or is on time or has been delayed.
     *
     * @var string
     */
    protected $status;

    /**
     * Specifies the type of delay.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Specifies the type of delay.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Specifies the subType of delay.
     */
    public function getSubType(): string
    {
        return $this->subType;
    }

    /**
     * Specifies the subType of delay.
     */
    public function setSubType(string $subType): self
    {
        $this->initialized['subType'] = true;
        $this->subType = $subType;

        return $this;
    }

    /**
     * Specifies the status of package indicating whether a package is arriving early or is on time or has been delayed.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Specifies the status of package indicating whether a package is arriving early or is on time or has been delayed.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
