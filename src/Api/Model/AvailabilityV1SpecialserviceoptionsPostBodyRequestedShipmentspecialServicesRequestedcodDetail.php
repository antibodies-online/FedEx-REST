<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedcodDetail extends \ArrayObject
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
     * Identifies the type of funds FedEx should collect upon shipment delivery.
     *
     * @var string
     */
    protected $codCollectionType;
    /**
     * Use this object to specify amount and currency details.
     *
     * @var mixed
     */
    protected $codCollectionAmount;
    /**
     * Identifies the type of funds FedEx should collect upon shipment delivery.
     *
     * @return string
     */
    public function getCodCollectionType() : string
    {
        return $this->codCollectionType;
    }
    /**
     * Identifies the type of funds FedEx should collect upon shipment delivery.
     *
     * @param string $codCollectionType
     *
     * @return self
     */
    public function setCodCollectionType(string $codCollectionType) : self
    {
        $this->initialized['codCollectionType'] = true;
        $this->codCollectionType = $codCollectionType;
        return $this;
    }
    /**
     * Use this object to specify amount and currency details.
     *
     * @return mixed
     */
    public function getCodCollectionAmount()
    {
        return $this->codCollectionAmount;
    }
    /**
     * Use this object to specify amount and currency details.
     *
     * @param mixed $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount($codCollectionAmount) : self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
}