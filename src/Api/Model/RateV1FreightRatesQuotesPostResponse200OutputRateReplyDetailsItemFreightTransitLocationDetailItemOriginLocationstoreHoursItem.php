<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItem extends \ArrayObject
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
     * Specifies the exceptional hours.
     *
     * @var list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItemExceptionalHoursItem>
     */
    protected $exceptionalHours;
    /**
     * The days of the week for which this capability applies.
     *
     * @var string
     */
    protected $dayofweek;
    /**
     * Specifies the operational hours type.
     *
     * @var list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItemOperationalHoursItem>
     */
    protected $operationalHours;
    /**
     * Operating hours for the location that are exception from the normal hours of operation.
     *
     * @var string
     */
    protected $exceptionalHoursType;
    /**
     * Specifies the operating hours for the location that are exception from the normal hours of operation.
     *
     * @var string
     */
    protected $operationalHoursType;
    /**
     * Specifies the exceptional hours.
     *
     * @return list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItemExceptionalHoursItem>
     */
    public function getExceptionalHours(): array
    {
        return $this->exceptionalHours;
    }
    /**
     * Specifies the exceptional hours.
     *
     * @param list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItemExceptionalHoursItem> $exceptionalHours
     *
     * @return self
     */
    public function setExceptionalHours(array $exceptionalHours): self
    {
        $this->initialized['exceptionalHours'] = true;
        $this->exceptionalHours = $exceptionalHours;
        return $this;
    }
    /**
     * The days of the week for which this capability applies.
     *
     * @return string
     */
    public function getDayofweek(): string
    {
        return $this->dayofweek;
    }
    /**
     * The days of the week for which this capability applies.
     *
     * @param string $dayofweek
     *
     * @return self
     */
    public function setDayofweek(string $dayofweek): self
    {
        $this->initialized['dayofweek'] = true;
        $this->dayofweek = $dayofweek;
        return $this;
    }
    /**
     * Specifies the operational hours type.
     *
     * @return list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItemOperationalHoursItem>
     */
    public function getOperationalHours(): array
    {
        return $this->operationalHours;
    }
    /**
     * Specifies the operational hours type.
     *
     * @param list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItemOperationalHoursItem> $operationalHours
     *
     * @return self
     */
    public function setOperationalHours(array $operationalHours): self
    {
        $this->initialized['operationalHours'] = true;
        $this->operationalHours = $operationalHours;
        return $this;
    }
    /**
     * Operating hours for the location that are exception from the normal hours of operation.
     *
     * @return string
     */
    public function getExceptionalHoursType(): string
    {
        return $this->exceptionalHoursType;
    }
    /**
     * Operating hours for the location that are exception from the normal hours of operation.
     *
     * @param string $exceptionalHoursType
     *
     * @return self
     */
    public function setExceptionalHoursType(string $exceptionalHoursType): self
    {
        $this->initialized['exceptionalHoursType'] = true;
        $this->exceptionalHoursType = $exceptionalHoursType;
        return $this;
    }
    /**
     * Specifies the operating hours for the location that are exception from the normal hours of operation.
     *
     * @return string
     */
    public function getOperationalHoursType(): string
    {
        return $this->operationalHoursType;
    }
    /**
     * Specifies the operating hours for the location that are exception from the normal hours of operation.
     *
     * @param string $operationalHoursType
     *
     * @return self
     */
    public function setOperationalHoursType(string $operationalHoursType): self
    {
        $this->initialized['operationalHoursType'] = true;
        $this->operationalHoursType = $operationalHoursType;
        return $this;
    }
}