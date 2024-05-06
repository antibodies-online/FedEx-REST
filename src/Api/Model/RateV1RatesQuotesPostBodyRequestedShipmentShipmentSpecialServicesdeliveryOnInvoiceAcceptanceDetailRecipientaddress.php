<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaddress extends \ArrayObject
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
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * The two-letter country code. <br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     *
     * @return list<string>
     */
    public function getStreetLines() : array
    {
        return $this->streetLines;
    }
    /**
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     *
     * @param list<string> $streetLines
     *
     * @return self
     */
    public function setStreetLines(array $streetLines) : self
    {
        $this->initialized['streetLines'] = true;
        $this->streetLines = $streetLines;
        return $this;
    }
    /**
     * The two-letter country code. <br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The two-letter country code. <br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}