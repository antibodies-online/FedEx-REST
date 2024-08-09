<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetailFreightDirectDataDetailsItem extends \ArrayObject
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
     * Special freight direct detail. <br> Example: <ul><li>BASIC</li><li>BASIC_BY_APPOINTMENT</li><li>PREMIUM</li><li>STANDARD</li></ul>
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies freight direct transportation type. <br> Example: <ul><li>DELIVERY</li><li>PICKUP</li></ul>
     *
     * @var string
     */
    protected $transportationType;
    /**
     * Specifies the email address.<br>Example: a@fedex.com
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * 
     *
     * @var list<PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem>
     */
    protected $phoneNumberDetails;
    /**
     * Special freight direct detail. <br> Example: <ul><li>BASIC</li><li>BASIC_BY_APPOINTMENT</li><li>PREMIUM</li><li>STANDARD</li></ul>
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Special freight direct detail. <br> Example: <ul><li>BASIC</li><li>BASIC_BY_APPOINTMENT</li><li>PREMIUM</li><li>STANDARD</li></ul>
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Specifies freight direct transportation type. <br> Example: <ul><li>DELIVERY</li><li>PICKUP</li></ul>
     *
     * @return string
     */
    public function getTransportationType(): string
    {
        return $this->transportationType;
    }
    /**
     * Specifies freight direct transportation type. <br> Example: <ul><li>DELIVERY</li><li>PICKUP</li></ul>
     *
     * @param string $transportationType
     *
     * @return self
     */
    public function setTransportationType(string $transportationType): self
    {
        $this->initialized['transportationType'] = true;
        $this->transportationType = $transportationType;
        return $this;
    }
    /**
     * Specifies the email address.<br>Example: a@fedex.com
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
    /**
     * Specifies the email address.<br>Example: a@fedex.com
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * 
     *
     * @return list<PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem>
     */
    public function getPhoneNumberDetails(): array
    {
        return $this->phoneNumberDetails;
    }
    /**
     * 
     *
     * @param list<PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem> $phoneNumberDetails
     *
     * @return self
     */
    public function setPhoneNumberDetails(array $phoneNumberDetails): self
    {
        $this->initialized['phoneNumberDetails'] = true;
        $this->phoneNumberDetails = $phoneNumberDetails;
        return $this;
    }
}