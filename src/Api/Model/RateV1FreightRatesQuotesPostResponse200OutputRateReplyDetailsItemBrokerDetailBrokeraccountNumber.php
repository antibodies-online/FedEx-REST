<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetailBrokeraccountNumber extends \ArrayObject
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
     * Specify value of the account number. Maximum length is 9.<br> Example: XXXXX6789
     *
     * @var string
     */
    protected $value;
    /**
     * Specify value of the account number. Maximum length is 9.<br> Example: XXXXX6789
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Specify value of the account number. Maximum length is 9.<br> Example: XXXXX6789
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}