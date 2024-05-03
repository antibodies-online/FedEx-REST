<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDateAndTimesItem extends \ArrayObject
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
     * Field which holds the tracking date or timestamp in ISO format.<br>Format: YYYY-MM-DD<br> Example: '2019-05-07'.
     *
     * @var string
     */
    protected $dateTime;
    /**
     * Field which holds information about the type of tracking date or timestamp.<br> Example: 'ACTUAL_DELIVERY'.
     *
     * @var string
     */
    protected $type;

    /**
     * Field which holds the tracking date or timestamp in ISO format.<br>Format: YYYY-MM-DD<br> Example: '2019-05-07'.
     */
    public function getDateTime(): string
    {
        return $this->dateTime;
    }

    /**
     * Field which holds the tracking date or timestamp in ISO format.<br>Format: YYYY-MM-DD<br> Example: '2019-05-07'.
     */
    public function setDateTime(string $dateTime): self
    {
        $this->initialized['dateTime'] = true;
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Field which holds information about the type of tracking date or timestamp.<br> Example: 'ACTUAL_DELIVERY'.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Field which holds information about the type of tracking date or timestamp.<br> Example: 'ACTUAL_DELIVERY'.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
