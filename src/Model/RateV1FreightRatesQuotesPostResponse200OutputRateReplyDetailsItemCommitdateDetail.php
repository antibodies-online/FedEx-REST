<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdateDetail extends \ArrayObject
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
     * The days of the week for which this capability applies.
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * This is expected delivery date in format [YYYY-MM-DDTHH:mm:ss]<br>Example: 2020-07-16T10:30:00
     *
     * @var string
     */
    protected $dayFormat;
    /**
     * The days of the week for which this capability applies.
     *
     * @return string
     */
    public function getDayOfWeek() : string
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
    public function setDayOfWeek(string $dayOfWeek) : self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * This is expected delivery date in format [YYYY-MM-DDTHH:mm:ss]<br>Example: 2020-07-16T10:30:00
     *
     * @return string
     */
    public function getDayFormat() : string
    {
        return $this->dayFormat;
    }
    /**
     * This is expected delivery date in format [YYYY-MM-DDTHH:mm:ss]<br>Example: 2020-07-16T10:30:00
     *
     * @param string $dayFormat
     *
     * @return self
     */
    public function setDayFormat(string $dayFormat) : self
    {
        $this->initialized['dayFormat'] = true;
        $this->dayFormat = $dayFormat;
        return $this;
    }
}