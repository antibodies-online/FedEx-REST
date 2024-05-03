<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

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
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }

    /**
     * The days of the week for which this capability applies.
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Specifies the overlay.
     */
    public function getOperationalOverlay(): RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsOperationalOverlay
    {
        return $this->operationalOverlay;
    }

    /**
     * Specifies the overlay.
     */
    public function setOperationalOverlay(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsOperationalOverlay $operationalOverlay): self
    {
        $this->initialized['operationalOverlay'] = true;
        $this->operationalOverlay = $operationalOverlay;

        return $this;
    }

    /**
     * Specifies the exceptional time.
     */
    public function getExceptionalTime(): string
    {
        return $this->exceptionalTime;
    }

    /**
     * Specifies the exceptional time.
     */
    public function setExceptionalTime(string $exceptionalTime): self
    {
        $this->initialized['exceptionalTime'] = true;
        $this->exceptionalTime = $exceptionalTime;

        return $this;
    }

    /**
     * Specifies the overlay.
     */
    public function getExceptionalOverlay(): RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsExceptionalOverlay
    {
        return $this->exceptionalOverlay;
    }

    /**
     * Specifies the overlay.
     */
    public function setExceptionalOverlay(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsExceptionalOverlay $exceptionalOverlay): self
    {
        $this->initialized['exceptionalOverlay'] = true;
        $this->exceptionalOverlay = $exceptionalOverlay;

        return $this;
    }

    /**
     * Specifies the operation time.
     */
    public function getOperationTime(): string
    {
        return $this->operationTime;
    }

    /**
     * Specifies the operation time.
     */
    public function setOperationTime(string $operationTime): self
    {
        $this->initialized['operationTime'] = true;
        $this->operationTime = $operationTime;

        return $this;
    }
}