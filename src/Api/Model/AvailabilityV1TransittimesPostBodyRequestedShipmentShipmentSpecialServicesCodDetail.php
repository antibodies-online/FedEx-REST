<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetail extends \ArrayObject
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
     * Amount to be charged for COD collection
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetailCodCollectionAmount
     */
    protected $codCollectionAmount;
    /**
     * Indicate the type of funds FedEx should collect upon shipment delivery.
     *
     * @var string
     */
    protected $codCollectionType;
    /**
     * Amount to be charged for COD collection
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetailCodCollectionAmount
     */
    public function getCodCollectionAmount(): AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Amount to be charged for COD collection
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetailCodCollectionAmount $codCollectionAmount): self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
    /**
     * Indicate the type of funds FedEx should collect upon shipment delivery.
     *
     * @return string
     */
    public function getCodCollectionType(): string
    {
        return $this->codCollectionType;
    }
    /**
     * Indicate the type of funds FedEx should collect upon shipment delivery.
     *
     * @param string $codCollectionType
     *
     * @return self
     */
    public function setCodCollectionType(string $codCollectionType): self
    {
        $this->initialized['codCollectionType'] = true;
        $this->codCollectionType = $codCollectionType;
        return $this;
    }
}