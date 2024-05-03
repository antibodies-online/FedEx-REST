<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1RatesQuotesPostResponse200Output extends \ArrayObject
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
     * This object will hold the rate and shipment data returned for a request.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItem>
     */
    protected $rateReplyDetails;
    /**
     * The date on which the rate is quoted.<br> Example: 2019-09-18
     *
     * @var string
     */
    protected $quoteDate;
    /**
     * Specifies the encoded form of the rate. <br> Example: false
     *
     * @var bool
     */
    protected $encoded;
    /**
     * The alert code, alert type, and alert message obtained when a rate quote is requested.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * This object will hold the rate and shipment data returned for a request.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItem>
     */
    public function getRateReplyDetails() : array
    {
        return $this->rateReplyDetails;
    }
    /**
     * This object will hold the rate and shipment data returned for a request.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItem> $rateReplyDetails
     *
     * @return self
     */
    public function setRateReplyDetails(array $rateReplyDetails) : self
    {
        $this->initialized['rateReplyDetails'] = true;
        $this->rateReplyDetails = $rateReplyDetails;
        return $this;
    }
    /**
     * The date on which the rate is quoted.<br> Example: 2019-09-18
     *
     * @return string
     */
    public function getQuoteDate() : string
    {
        return $this->quoteDate;
    }
    /**
     * The date on which the rate is quoted.<br> Example: 2019-09-18
     *
     * @param string $quoteDate
     *
     * @return self
     */
    public function setQuoteDate(string $quoteDate) : self
    {
        $this->initialized['quoteDate'] = true;
        $this->quoteDate = $quoteDate;
        return $this;
    }
    /**
     * Specifies the encoded form of the rate. <br> Example: false
     *
     * @return bool
     */
    public function getEncoded() : bool
    {
        return $this->encoded;
    }
    /**
     * Specifies the encoded form of the rate. <br> Example: false
     *
     * @param bool $encoded
     *
     * @return self
     */
    public function setEncoded(bool $encoded) : self
    {
        $this->initialized['encoded'] = true;
        $this->encoded = $encoded;
        return $this;
    }
    /**
     * The alert code, alert type, and alert message obtained when a rate quote is requested.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * The alert code, alert type, and alert message obtained when a rate quote is requested.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts) : self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}