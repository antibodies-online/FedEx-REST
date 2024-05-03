<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindow extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Field which describes the time window provided. <br> Example: Description field
     *
     * @var string
     */
    protected $description;
    /**
     * Field which holds a date/timestamp window.
     *
     * @var TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindowwindow
     */
    protected $window;
    /**
     * Field which holds the code representing the description for the time window provided. <br> Example: ESTIMATED_DELIVERY
     *
     * @var string
     */
    protected $type;
    /**
     * Field which describes the time window provided. <br> Example: Description field
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Field which describes the time window provided. <br> Example: Description field
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Field which holds a date/timestamp window.
     *
     * @return TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindowwindow
     */
    public function getWindow() : TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindowwindow
    {
        return $this->window;
    }
    /**
     * Field which holds a date/timestamp window.
     *
     * @param TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindowwindow $window
     *
     * @return self
     */
    public function setWindow(TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindowwindow $window) : self
    {
        $this->initialized['window'] = true;
        $this->window = $window;
        return $this;
    }
    /**
     * Field which holds the code representing the description for the time window provided. <br> Example: ESTIMATED_DELIVERY
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Field which holds the code representing the description for the time window provided. <br> Example: ESTIMATED_DELIVERY
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}