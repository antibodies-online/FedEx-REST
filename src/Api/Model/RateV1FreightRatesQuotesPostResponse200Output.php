<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200Output extends \ArrayObject
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
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br>Example: AnyCo_order123456789
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * This object will hold the rate and shipment data returned for a request.
     *
     * @var list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem>
     */
    protected $rateReplyDetails;
    /**
     * The date on which the rate is quoted.<br> Example: 2019-09-18
     *
     * @var string
     */
    protected $quoteDate;
    /**
     * Specifies the encoded form of the rate.
     *
     * @var bool
     */
    protected $encoded;
    /**
     * The cxs alert code, alert type, and alert message obtained when a rate quote is requested.
     *
     * @var list<RateV1FreightRatesQuotesPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br>Example: AnyCo_order123456789
     *
     * @return string
     */
    public function getCustomerTransactionId(): string
    {
        return $this->customerTransactionId;
    }
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br>Example: AnyCo_order123456789
     *
     * @param string $customerTransactionId
     *
     * @return self
     */
    public function setCustomerTransactionId(string $customerTransactionId): self
    {
        $this->initialized['customerTransactionId'] = true;
        $this->customerTransactionId = $customerTransactionId;
        return $this;
    }
    /**
     * This object will hold the rate and shipment data returned for a request.
     *
     * @return list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem>
     */
    public function getRateReplyDetails(): array
    {
        return $this->rateReplyDetails;
    }
    /**
     * This object will hold the rate and shipment data returned for a request.
     *
     * @param list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItem> $rateReplyDetails
     *
     * @return self
     */
    public function setRateReplyDetails(array $rateReplyDetails): self
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
    public function getQuoteDate(): string
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
    public function setQuoteDate(string $quoteDate): self
    {
        $this->initialized['quoteDate'] = true;
        $this->quoteDate = $quoteDate;
        return $this;
    }
    /**
     * Specifies the encoded form of the rate.
     *
     * @return bool
     */
    public function getEncoded(): bool
    {
        return $this->encoded;
    }
    /**
     * Specifies the encoded form of the rate.
     *
     * @param bool $encoded
     *
     * @return self
     */
    public function setEncoded(bool $encoded): self
    {
        $this->initialized['encoded'] = true;
        $this->encoded = $encoded;
        return $this;
    }
    /**
     * The cxs alert code, alert type, and alert message obtained when a rate quote is requested.
     *
     * @return list<RateV1FreightRatesQuotesPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The cxs alert code, alert type, and alert message obtained when a rate quote is requested.
     *
     * @param list<RateV1FreightRatesQuotesPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}