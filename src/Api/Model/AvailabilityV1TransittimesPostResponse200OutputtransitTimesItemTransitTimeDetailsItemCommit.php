<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommit extends \ArrayObject
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
     * The delivery commitment date/time the shipment will arrive at the border. <br>format [YYYY-MM-DDTHH:MM:SS:00Z]
     *
     * @var string
     */
    protected $brokerCommitTimestamp;
    /**
     * Identifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     *
     * @var string
     */
    protected $cutOffTime;
    /**
     * The Commodity applicable to this commitment.
     *
     * @var string
     */
    protected $commodityName;
    /**
     * The number of days the package/shipment is to be in transit. Applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     *
     * @var AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitTransitDays
     */
    protected $transitDays;
    /**
     * This is a message concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as 'REQUEST COMPLETED' 
     *
     * @var string
     */
    protected $commitMessageDetails;
    /**
     * FedEx internal destination address/location details.
     *
     * @var AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDerivedDestinationDetail
     */
    protected $derivedDestinationDetail;
    /**
     * Specific date and time.
     *
     * @var AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail
     */
    protected $dateDetail;
    /**
     * The delivery commitment date/time the shipment will arrive at the border. <br>format [YYYY-MM-DDTHH:MM:SS:00Z]
     *
     * @return string
     */
    public function getBrokerCommitTimestamp(): string
    {
        return $this->brokerCommitTimestamp;
    }
    /**
     * The delivery commitment date/time the shipment will arrive at the border. <br>format [YYYY-MM-DDTHH:MM:SS:00Z]
     *
     * @param string $brokerCommitTimestamp
     *
     * @return self
     */
    public function setBrokerCommitTimestamp(string $brokerCommitTimestamp): self
    {
        $this->initialized['brokerCommitTimestamp'] = true;
        $this->brokerCommitTimestamp = $brokerCommitTimestamp;
        return $this;
    }
    /**
     * Identifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     *
     * @return string
     */
    public function getCutOffTime(): string
    {
        return $this->cutOffTime;
    }
    /**
     * Identifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     *
     * @param string $cutOffTime
     *
     * @return self
     */
    public function setCutOffTime(string $cutOffTime): self
    {
        $this->initialized['cutOffTime'] = true;
        $this->cutOffTime = $cutOffTime;
        return $this;
    }
    /**
     * The Commodity applicable to this commitment.
     *
     * @return string
     */
    public function getCommodityName(): string
    {
        return $this->commodityName;
    }
    /**
     * The Commodity applicable to this commitment.
     *
     * @param string $commodityName
     *
     * @return self
     */
    public function setCommodityName(string $commodityName): self
    {
        $this->initialized['commodityName'] = true;
        $this->commodityName = $commodityName;
        return $this;
    }
    /**
     * The number of days the package/shipment is to be in transit. Applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     *
     * @return AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitTransitDays
     */
    public function getTransitDays(): AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitTransitDays
    {
        return $this->transitDays;
    }
    /**
     * The number of days the package/shipment is to be in transit. Applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     *
     * @param AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitTransitDays $transitDays
     *
     * @return self
     */
    public function setTransitDays(AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitTransitDays $transitDays): self
    {
        $this->initialized['transitDays'] = true;
        $this->transitDays = $transitDays;
        return $this;
    }
    /**
     * This is a message concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as 'REQUEST COMPLETED' 
     *
     * @return string
     */
    public function getCommitMessageDetails(): string
    {
        return $this->commitMessageDetails;
    }
    /**
     * This is a message concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as 'REQUEST COMPLETED' 
     *
     * @param string $commitMessageDetails
     *
     * @return self
     */
    public function setCommitMessageDetails(string $commitMessageDetails): self
    {
        $this->initialized['commitMessageDetails'] = true;
        $this->commitMessageDetails = $commitMessageDetails;
        return $this;
    }
    /**
     * FedEx internal destination address/location details.
     *
     * @return AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDerivedDestinationDetail
     */
    public function getDerivedDestinationDetail(): AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDerivedDestinationDetail
    {
        return $this->derivedDestinationDetail;
    }
    /**
     * FedEx internal destination address/location details.
     *
     * @param AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDerivedDestinationDetail $derivedDestinationDetail
     *
     * @return self
     */
    public function setDerivedDestinationDetail(AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDerivedDestinationDetail $derivedDestinationDetail): self
    {
        $this->initialized['derivedDestinationDetail'] = true;
        $this->derivedDestinationDetail = $derivedDestinationDetail;
        return $this;
    }
    /**
     * Specific date and time.
     *
     * @return AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail
     */
    public function getDateDetail(): AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail
    {
        return $this->dateDetail;
    }
    /**
     * Specific date and time.
     *
     * @param AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail $dateDetail
     *
     * @return self
     */
    public function setDateDetail(AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail $dateDetail): self
    {
        $this->initialized['dateDetail'] = true;
        $this->dateDetail = $dateDetail;
        return $this;
    }
}