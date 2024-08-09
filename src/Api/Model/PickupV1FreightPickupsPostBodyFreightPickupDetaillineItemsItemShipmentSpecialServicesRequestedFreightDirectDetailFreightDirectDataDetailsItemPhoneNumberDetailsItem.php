<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetailFreightDirectDataDetailsItemPhoneNumberDetailsItem extends \ArrayObject
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
     * Indicates the phone number.<br> Example: 7194446666
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Indicates the phone number type.<br> Example: <ul><li>FAX</li><li>HOME</li><li>MOBILE</li><li>PAGER</li><li>TOLL_FREE</li><li>WORK</li></ul>
     *
     * @var string
     */
    protected $phoneNumberType;
    /**
     * Indicates the phone number.<br> Example: 7194446666
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * Indicates the phone number.<br> Example: 7194446666
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
    /**
     * Indicates the phone number type.<br> Example: <ul><li>FAX</li><li>HOME</li><li>MOBILE</li><li>PAGER</li><li>TOLL_FREE</li><li>WORK</li></ul>
     *
     * @return string
     */
    public function getPhoneNumberType(): string
    {
        return $this->phoneNumberType;
    }
    /**
     * Indicates the phone number type.<br> Example: <ul><li>FAX</li><li>HOME</li><li>MOBILE</li><li>PAGER</li><li>TOLL_FREE</li><li>WORK</li></ul>
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
}