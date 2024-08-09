<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem extends \ArrayObject
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
     * This provides the type of phoneNumber being used in request.<br> Example: <ul><li>FAX</li><li>HOME</li><li>MOBILE</li><li>PAGER</li><li>TOLL_FREE</li><li>WORK</li></ul>
     *
     * @var string
     */
    protected $phoneNumberType;
    /**
     * This provides the phone number
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * This provides the type of phoneNumber being used in request.<br> Example: <ul><li>FAX</li><li>HOME</li><li>MOBILE</li><li>PAGER</li><li>TOLL_FREE</li><li>WORK</li></ul>
     *
     * @return string
     */
    public function getPhoneNumberType(): string
    {
        return $this->phoneNumberType;
    }
    /**
     * This provides the type of phoneNumber being used in request.<br> Example: <ul><li>FAX</li><li>HOME</li><li>MOBILE</li><li>PAGER</li><li>TOLL_FREE</li><li>WORK</li></ul>
     *
     * @param string $phoneNumberType
     *
     * @return self
     */
    public function setPhoneNumberType(string $phoneNumberType): self
    {
        $this->initialized['phoneNumberType'] = true;
        $this->phoneNumberType = $phoneNumberType;
        return $this;
    }
    /**
     * This provides the phone number
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * This provides the phone number
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}