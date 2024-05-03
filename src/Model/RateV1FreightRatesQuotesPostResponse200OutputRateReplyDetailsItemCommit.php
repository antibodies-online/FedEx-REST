<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommit extends \ArrayObject
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
     * Code indicating the number of transit days.
     *
     * @var string
     */
    protected $daysInTransit;
    /**
     * Indicates if there is a guaranteed delivery option applied to the rate.  This is for freight rates only.<br> Valid values<br>GUARANTEED_MORNING - guaranteed delivery on morning of date specified.<br>GUARANTEED_CLOSE_OF_BUSINESS - guaranteed delivery on date specified by close of day
     *
     * @var string
     */
    protected $guaranteedType;
    /**
     * These are date and time details.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdateDetail
     */
    protected $dateDetail;
    /**
     * Specifies the saturdayDelivery.
     *
     * @var bool
     */
    protected $saturdayDelivery;
    /**
     * Specifies the alternate names of commodities.
     *
     * @var list<string>
     */
    protected $alternativeCommodityNames;
    /**
     * These are number of days the package/shipment is to be in transit. Applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommittransitDays
     */
    protected $transitDays;
    /**
     * This is an informational message to inform client Deliverydate is unavailable. If commitTimestamp and transitTime are unavailable, then this is populated in the response in the client language.
     *
     * @var string
     */
    protected $label;
    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message.
     *
     * @var string
     */
    protected $commitMessageDetails;
    /**
     * The Commodity applicable to this commitment.
     *
     * @var string
     */
    protected $commodityName;
    /**
     * Code indicating the number of transit days.
     *
     * @return string
     */
    public function getDaysInTransit() : string
    {
        return $this->daysInTransit;
    }
    /**
     * Code indicating the number of transit days.
     *
     * @param string $daysInTransit
     *
     * @return self
     */
    public function setDaysInTransit(string $daysInTransit) : self
    {
        $this->initialized['daysInTransit'] = true;
        $this->daysInTransit = $daysInTransit;
        return $this;
    }
    /**
     * Indicates if there is a guaranteed delivery option applied to the rate.  This is for freight rates only.<br> Valid values<br>GUARANTEED_MORNING - guaranteed delivery on morning of date specified.<br>GUARANTEED_CLOSE_OF_BUSINESS - guaranteed delivery on date specified by close of day
     *
     * @return string
     */
    public function getGuaranteedType() : string
    {
        return $this->guaranteedType;
    }
    /**
     * Indicates if there is a guaranteed delivery option applied to the rate.  This is for freight rates only.<br> Valid values<br>GUARANTEED_MORNING - guaranteed delivery on morning of date specified.<br>GUARANTEED_CLOSE_OF_BUSINESS - guaranteed delivery on date specified by close of day
     *
     * @param string $guaranteedType
     *
     * @return self
     */
    public function setGuaranteedType(string $guaranteedType) : self
    {
        $this->initialized['guaranteedType'] = true;
        $this->guaranteedType = $guaranteedType;
        return $this;
    }
    /**
     * These are date and time details.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdateDetail
     */
    public function getDateDetail() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdateDetail
    {
        return $this->dateDetail;
    }
    /**
     * These are date and time details.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdateDetail $dateDetail
     *
     * @return self
     */
    public function setDateDetail(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdateDetail $dateDetail) : self
    {
        $this->initialized['dateDetail'] = true;
        $this->dateDetail = $dateDetail;
        return $this;
    }
    /**
     * Specifies the saturdayDelivery.
     *
     * @return bool
     */
    public function getSaturdayDelivery() : bool
    {
        return $this->saturdayDelivery;
    }
    /**
     * Specifies the saturdayDelivery.
     *
     * @param bool $saturdayDelivery
     *
     * @return self
     */
    public function setSaturdayDelivery(bool $saturdayDelivery) : self
    {
        $this->initialized['saturdayDelivery'] = true;
        $this->saturdayDelivery = $saturdayDelivery;
        return $this;
    }
    /**
     * Specifies the alternate names of commodities.
     *
     * @return list<string>
     */
    public function getAlternativeCommodityNames() : array
    {
        return $this->alternativeCommodityNames;
    }
    /**
     * Specifies the alternate names of commodities.
     *
     * @param list<string> $alternativeCommodityNames
     *
     * @return self
     */
    public function setAlternativeCommodityNames(array $alternativeCommodityNames) : self
    {
        $this->initialized['alternativeCommodityNames'] = true;
        $this->alternativeCommodityNames = $alternativeCommodityNames;
        return $this;
    }
    /**
     * These are number of days the package/shipment is to be in transit. Applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommittransitDays
     */
    public function getTransitDays() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommittransitDays
    {
        return $this->transitDays;
    }
    /**
     * These are number of days the package/shipment is to be in transit. Applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommittransitDays $transitDays
     *
     * @return self
     */
    public function setTransitDays(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommittransitDays $transitDays) : self
    {
        $this->initialized['transitDays'] = true;
        $this->transitDays = $transitDays;
        return $this;
    }
    /**
     * This is an informational message to inform client Deliverydate is unavailable. If commitTimestamp and transitTime are unavailable, then this is populated in the response in the client language.
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * This is an informational message to inform client Deliverydate is unavailable. If commitTimestamp and transitTime are unavailable, then this is populated in the response in the client language.
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message.
     *
     * @return string
     */
    public function getCommitMessageDetails() : string
    {
        return $this->commitMessageDetails;
    }
    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message.
     *
     * @param string $commitMessageDetails
     *
     * @return self
     */
    public function setCommitMessageDetails(string $commitMessageDetails) : self
    {
        $this->initialized['commitMessageDetails'] = true;
        $this->commitMessageDetails = $commitMessageDetails;
        return $this;
    }
    /**
     * The Commodity applicable to this commitment.
     *
     * @return string
     */
    public function getCommodityName() : string
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
    public function setCommodityName(string $commodityName) : self
    {
        $this->initialized['commodityName'] = true;
        $this->commodityName = $commodityName;
        return $this;
    }
}