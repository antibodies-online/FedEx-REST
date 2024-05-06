<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem extends \ArrayObject
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
     * This field provides the type for FedexFreight Detail service.<br> Example: <ul><li>BASIC</li><li>BASIC_BY_APPOINTMENT</li><li>PREMIUM</li><li>STANDARD</li></ul>
     *
     * @var string
     */
    protected $type;
    /**
     * This field provides the transportation type for Fedex Freight Detail service.<br> Example: <ul><li>DELIVERY</li><li>PICKUP</li></ul>
     *
     * @var string
     */
    protected $transportationType;
    /**
     * This field provides the email address associated.
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * 
     *
     * @var list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem>
     */
    protected $phoneNumberDetails;
    /**
     * This field provides the type for FedexFreight Detail service.<br> Example: <ul><li>BASIC</li><li>BASIC_BY_APPOINTMENT</li><li>PREMIUM</li><li>STANDARD</li></ul>
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * This field provides the type for FedexFreight Detail service.<br> Example: <ul><li>BASIC</li><li>BASIC_BY_APPOINTMENT</li><li>PREMIUM</li><li>STANDARD</li></ul>
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * This field provides the transportation type for Fedex Freight Detail service.<br> Example: <ul><li>DELIVERY</li><li>PICKUP</li></ul>
     *
     * @return string
     */
    public function getTransportationType() : string
    {
        return $this->transportationType;
    }
    /**
     * This field provides the transportation type for Fedex Freight Detail service.<br> Example: <ul><li>DELIVERY</li><li>PICKUP</li></ul>
     *
     * @param string $transportationType
     *
     * @return self
     */
    public function setTransportationType(string $transportationType) : self
    {
        $this->initialized['transportationType'] = true;
        $this->transportationType = $transportationType;
        return $this;
    }
    /**
     * This field provides the email address associated.
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * This field provides the email address associated.
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress) : self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * 
     *
     * @return list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem>
     */
    public function getPhoneNumberDetails() : array
    {
        return $this->phoneNumberDetails;
    }
    /**
     * 
     *
     * @param list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem> $phoneNumberDetails
     *
     * @return self
     */
    public function setPhoneNumberDetails(array $phoneNumberDetails) : self
    {
        $this->initialized['phoneNumberDetails'] = true;
        $this->phoneNumberDetails = $phoneNumberDetails;
        return $this;
    }
}