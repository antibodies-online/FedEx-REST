<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItemOperationalHoursItem extends \ArrayObject
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
     * Specifies the start time.
     *
     * @var string
     */
    protected $begins;
    /**
     * Specifies the end time.
     *
     * @var string
     */
    protected $ends;
    /**
     * Specifies the start time.
     *
     * @return string
     */
    public function getBegins() : string
    {
        return $this->begins;
    }
    /**
     * Specifies the start time.
     *
     * @param string $begins
     *
     * @return self
     */
    public function setBegins(string $begins) : self
    {
        $this->initialized['begins'] = true;
        $this->begins = $begins;
        return $this;
    }
    /**
     * Specifies the end time.
     *
     * @return string
     */
    public function getEnds() : string
    {
        return $this->ends;
    }
    /**
     * Specifies the end time.
     *
     * @param string $ends
     *
     * @return self
     */
    public function setEnds(string $ends) : self
    {
        $this->initialized['ends'] = true;
        $this->ends = $ends;
        return $this;
    }
}