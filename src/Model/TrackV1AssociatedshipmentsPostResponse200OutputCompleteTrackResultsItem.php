<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItem extends \ArrayObject
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
     * A tracking number to identify a package.<br> Example: 123456789012.
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * An array of detailed tracking information for the requested packages(s). In case of duplicate shipments, multiple track details will be populated.
     *
     * @var list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItem>
     */
    protected $trackResults;

    /**
     * A tracking number to identify a package.<br> Example: 123456789012.
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    /**
     * A tracking number to identify a package.<br> Example: 123456789012.
     */
    public function setTrackingNumber(string $trackingNumber): self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * An array of detailed tracking information for the requested packages(s). In case of duplicate shipments, multiple track details will be populated.
     *
     * @return list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItem>
     */
    public function getTrackResults(): array
    {
        return $this->trackResults;
    }

    /**
     * An array of detailed tracking information for the requested packages(s). In case of duplicate shipments, multiple track details will be populated.
     *
     * @param list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItem> $trackResults
     */
    public function setTrackResults(array $trackResults): self
    {
        $this->initialized['trackResults'] = true;
        $this->trackResults = $trackResults;

        return $this;
    }
}
