<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode extends \ArrayObject
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
     * Indicates the base.<br> Example: 00926
     *
     * @var string
     */
    protected $base;
    /**
     * Indicates the secondary value in Postal Code.<br> Example: 2716
     *
     * @var string
     */
    protected $addOn;
    /**
     * Indicates the tertiary value in Postal Code.<br> Example: 50
     *
     * @var string
     */
    protected $deliveryPoint;
    /**
     * Indicates the base.<br> Example: 00926
     *
     * @return string
     */
    public function getBase(): string
    {
        return $this->base;
    }
    /**
     * Indicates the base.<br> Example: 00926
     *
     * @param string $base
     *
     * @return self
     */
    public function setBase(string $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;
        return $this;
    }
    /**
     * Indicates the secondary value in Postal Code.<br> Example: 2716
     *
     * @return string
     */
    public function getAddOn(): string
    {
        return $this->addOn;
    }
    /**
     * Indicates the secondary value in Postal Code.<br> Example: 2716
     *
     * @param string $addOn
     *
     * @return self
     */
    public function setAddOn(string $addOn): self
    {
        $this->initialized['addOn'] = true;
        $this->addOn = $addOn;
        return $this;
    }
    /**
     * Indicates the tertiary value in Postal Code.<br> Example: 50
     *
     * @return string
     */
    public function getDeliveryPoint(): string
    {
        return $this->deliveryPoint;
    }
    /**
     * Indicates the tertiary value in Postal Code.<br> Example: 50
     *
     * @param string $deliveryPoint
     *
     * @return self
     */
    public function setDeliveryPoint(string $deliveryPoint): self
    {
        $this->initialized['deliveryPoint'] = true;
        $this->deliveryPoint = $deliveryPoint;
        return $this;
    }
}