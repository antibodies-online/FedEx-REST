<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindowwindow extends \ArrayObject
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
     * Field which holds the begin date/timestamp for a range.<br> Example: '2021-10-01T08:00:00'
     *
     * @var string
     */
    protected $begins;
    /**
     * Field which holds the end date/timestamp for a range.<br> Example: '2021-10-15T00:00:00-06:00'
     *
     * @var string
     */
    protected $ends;
    /**
     * Field which holds the begin date/timestamp for a range.<br> Example: '2021-10-01T08:00:00'
     *
     * @return string
     */
    public function getBegins(): string
    {
        return $this->begins;
    }
    /**
     * Field which holds the begin date/timestamp for a range.<br> Example: '2021-10-01T08:00:00'
     *
     * @param string $begins
     *
     * @return self
     */
    public function setBegins(string $begins): self
    {
        $this->initialized['begins'] = true;
        $this->begins = $begins;
        return $this;
    }
    /**
     * Field which holds the end date/timestamp for a range.<br> Example: '2021-10-15T00:00:00-06:00'
     *
     * @return string
     */
    public function getEnds(): string
    {
        return $this->ends;
    }
    /**
     * Field which holds the end date/timestamp for a range.<br> Example: '2021-10-15T00:00:00-06:00'
     *
     * @param string $ends
     *
     * @return self
     */
    public function setEnds(string $ends): self
    {
        $this->initialized['ends'] = true;
        $this->ends = $ends;
        return $this;
    }
}