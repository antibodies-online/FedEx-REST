<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse400ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example:<br>ACCOUNT.NUMBER.MISMATCH<br>
     *
     * @var string
     */
    protected $code;
    /**
     * List of parameters which indicates the properties of the alert message.
     *
     * @var list<RateV1RatesQuotesPostResponse400ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of error alert message.<br>Example: When payment Type is SENDER, ShippingChargesPayment Payor AccountNumber should match the shipper account number.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example:<br>ACCOUNT.NUMBER.MISMATCH<br>
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example:<br>ACCOUNT.NUMBER.MISMATCH<br>
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * List of parameters which indicates the properties of the alert message.
     *
     * @return list<RateV1RatesQuotesPostResponse400ErrorsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * List of parameters which indicates the properties of the alert message.
     *
     * @param list<RateV1RatesQuotesPostResponse400ErrorsItemParameterListItem> $parameterList
     *
     * @return self
     */
    public function setParameterList(array $parameterList) : self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;
        return $this;
    }
    /**
     * Indicates the description of error alert message.<br>Example: When payment Type is SENDER, ShippingChargesPayment Payor AccountNumber should match the shipper account number.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Indicates the description of error alert message.<br>Example: When payment Type is SENDER, ShippingChargesPayment Payor AccountNumber should match the shipper account number.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}