<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindow extends \ArrayObject
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
     * Field which describes the time window provided. <br> Example: Description field.
     *
     * @var string
     */
    protected $description;
    /**
     * Field which holds a date/timestamp window.
     *
     * @var TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindowwindow
     */
    protected $window;
    /**
     * Field which holds the code representing the description for the time window provided. <br> Example: ESTIMATED_DELIVERY.
     *
     * @var string
     */
    protected $type;

    /**
     * Field which describes the time window provided. <br> Example: Description field.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Field which describes the time window provided. <br> Example: Description field.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Field which holds a date/timestamp window.
     */
    public function getWindow(): TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindowwindow
    {
        return $this->window;
    }

    /**
     * Field which holds a date/timestamp window.
     */
    public function setWindow(TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindowwindow $window): self
    {
        $this->initialized['window'] = true;
        $this->window = $window;

        return $this;
    }

    /**
     * Field which holds the code representing the description for the time window provided. <br> Example: ESTIMATED_DELIVERY.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Field which holds the code representing the description for the time window provided. <br> Example: ESTIMATED_DELIVERY.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}