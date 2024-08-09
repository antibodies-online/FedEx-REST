<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetails extends \ArrayObject
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
     * The days of the week for which this capability applies.
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * Specifies the overlay.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsOperationalOverlay
     */
    protected $operationalOverlay;
    /**
     * Specifies the exceptional time.
     *
     * @var string
     */
    protected $exceptionalTime;
    /**
     * Specifies the overlay.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsExceptionalOverlay
     */
    protected $exceptionalOverlay;
    /**
     * Specifies the operation time.
     *
     * @var string
     */
    protected $operationTime;
    /**
     * The days of the week for which this capability applies.
     *
     * @return string
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }
    /**
     * The days of the week for which this capability applies.
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Specifies the overlay.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsOperationalOverlay
     */
    public function getOperationalOverlay(): RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsOperationalOverlay
    {
        return $this->operationalOverlay;
    }
    /**
     * Specifies the overlay.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsOperationalOverlay $operationalOverlay
     *
     * @return self
     */
    public function setOperationalOverlay(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsOperationalOverlay $operationalOverlay): self
    {
        $this->initialized['operationalOverlay'] = true;
        $this->operationalOverlay = $operationalOverlay;
        return $this;
    }
    /**
     * Specifies the exceptional time.
     *
     * @return string
     */
    public function getExceptionalTime(): string
    {
        return $this->exceptionalTime;
    }
    /**
     * Specifies the exceptional time.
     *
     * @param string $exceptionalTime
     *
     * @return self
     */
    public function setExceptionalTime(string $exceptionalTime): self
    {
        $this->initialized['exceptionalTime'] = true;
        $this->exceptionalTime = $exceptionalTime;
        return $this;
    }
    /**
     * Specifies the overlay.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsExceptionalOverlay
     */
    public function getExceptionalOverlay(): RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsExceptionalOverlay
    {
        return $this->exceptionalOverlay;
    }
    /**
     * Specifies the overlay.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsExceptionalOverlay $exceptionalOverlay
     *
     * @return self
     */
    public function setExceptionalOverlay(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsExceptionalOverlay $exceptionalOverlay): self
    {
        $this->initialized['exceptionalOverlay'] = true;
        $this->exceptionalOverlay = $exceptionalOverlay;
        return $this;
    }
    /**
     * Specifies the operation time.
     *
     * @return string
     */
    public function getOperationTime(): string
    {
        return $this->operationTime;
    }
    /**
     * Specifies the operation time.
     *
     * @param string $operationTime
     *
     * @return self
     */
    public function setOperationTime(string $operationTime): self
    {
        $this->initialized['operationTime'] = true;
        $this->operationTime = $operationTime;
        return $this;
    }
}