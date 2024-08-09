<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostBodyLocationsSummaryRequestControlParameters extends \ArrayObject
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
     * Specify the unit of measurement and the radius around the address to search FedEx locations.
     *
     * @var LocationV1LocationsPostBodyLocationsSummaryRequestControlParametersdistance
     */
    protected $distance;
    /**
     * Specify the maximum number of locations to be returned in the reply.<br><i>Note: This takes precedence over the element multipleMatchesAction value RETURN_ALL.</i>
     *
     * @var int
     */
    protected $maxResults;
    /**
     * Specify the unit of measurement and the radius around the address to search FedEx locations.
     *
     * @return LocationV1LocationsPostBodyLocationsSummaryRequestControlParametersdistance
     */
    public function getDistance(): LocationV1LocationsPostBodyLocationsSummaryRequestControlParametersdistance
    {
        return $this->distance;
    }
    /**
     * Specify the unit of measurement and the radius around the address to search FedEx locations.
     *
     * @param LocationV1LocationsPostBodyLocationsSummaryRequestControlParametersdistance $distance
     *
     * @return self
     */
    public function setDistance(LocationV1LocationsPostBodyLocationsSummaryRequestControlParametersdistance $distance): self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
    /**
     * Specify the maximum number of locations to be returned in the reply.<br><i>Note: This takes precedence over the element multipleMatchesAction value RETURN_ALL.</i>
     *
     * @return int
     */
    public function getMaxResults(): int
    {
        return $this->maxResults;
    }
    /**
     * Specify the maximum number of locations to be returned in the reply.<br><i>Note: This takes precedence over the element multipleMatchesAction value RETURN_ALL.</i>
     *
     * @param int $maxResults
     *
     * @return self
     */
    public function setMaxResults(int $maxResults): self
    {
        $this->initialized['maxResults'] = true;
        $this->maxResults = $maxResults;
        return $this;
    }
}