<?php

namespace AntibodiesOnline\FedEx\Model;

class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem extends \ArrayObject
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
     * Type of the service is returned.
     *
     * @var string
     */
    protected $serviceType;
    /**
     * These are messages returned in the response.
     *
     * @var list<AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCustomerMessagesItem>
     */
    protected $customerMessages;
    /**
     * This is a total distance between origin and destination city centers for freight shipments.
     *
     * @var AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDistance
     */
    protected $distance;
    /**
     * The delivery commitment details.
     *
     * @var AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit
     */
    protected $commit;
    /**
     * 
     *
     * @var AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocation
     */
    protected $destinationLocation;
    /**
     * Name of service returned.
     *
     * @var string
     */
    protected $serviceName;
    /**
     * Type of the service is returned.
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * Type of the service is returned.
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType) : self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * These are messages returned in the response.
     *
     * @return list<AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCustomerMessagesItem>
     */
    public function getCustomerMessages() : array
    {
        return $this->customerMessages;
    }
    /**
     * These are messages returned in the response.
     *
     * @param list<AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCustomerMessagesItem> $customerMessages
     *
     * @return self
     */
    public function setCustomerMessages(array $customerMessages) : self
    {
        $this->initialized['customerMessages'] = true;
        $this->customerMessages = $customerMessages;
        return $this;
    }
    /**
     * This is a total distance between origin and destination city centers for freight shipments.
     *
     * @return AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDistance
     */
    public function getDistance() : AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDistance
    {
        return $this->distance;
    }
    /**
     * This is a total distance between origin and destination city centers for freight shipments.
     *
     * @param AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDistance $distance
     *
     * @return self
     */
    public function setDistance(AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDistance $distance) : self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
    /**
     * The delivery commitment details.
     *
     * @return AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit
     */
    public function getCommit() : AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit
    {
        return $this->commit;
    }
    /**
     * The delivery commitment details.
     *
     * @param AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit $commit
     *
     * @return self
     */
    public function setCommit(AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit $commit) : self
    {
        $this->initialized['commit'] = true;
        $this->commit = $commit;
        return $this;
    }
    /**
     * 
     *
     * @return AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocation
     */
    public function getDestinationLocation() : AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocation
    {
        return $this->destinationLocation;
    }
    /**
     * 
     *
     * @param AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocation $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocation $destinationLocation) : self
    {
        $this->initialized['destinationLocation'] = true;
        $this->destinationLocation = $destinationLocation;
        return $this;
    }
    /**
     * Name of service returned.
     *
     * @return string
     */
    public function getServiceName() : string
    {
        return $this->serviceName;
    }
    /**
     * Name of service returned.
     *
     * @param string $serviceName
     *
     * @return self
     */
    public function setServiceName(string $serviceName) : self
    {
        $this->initialized['serviceName'] = true;
        $this->serviceName = $serviceName;
        return $this;
    }
}