<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetailFreightDirectDataDetailsItem extends \ArrayObject
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
     * This field provides the email address associated with the freight user
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * This field prvides the phone number details associated with freight services
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem>
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
     * This field provides the email address associated with the freight user
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * This field provides the email address associated with the freight user
     *
     * @param string $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
    /**
     * This field prvides the phone number details associated with freight services
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem>
     */
    public function getPhoneNumberDetails() : array
    {
        return $this->phoneNumberDetails;
    }
    /**
     * This field prvides the phone number details associated with freight services
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem> $phoneNumberDetails
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