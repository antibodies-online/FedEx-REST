<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescriptionPackingDetails extends \ArrayObject
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
     * Coded specification for how commodity is to be packed.<br>Example: packing Instructions
     *
     * @var string
     */
    protected $packingInstructions;
    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft
     *
     * @var bool
     */
    protected $cargoAircraftOnly;
    /**
     * Coded specification for how commodity is to be packed.<br>Example: packing Instructions
     *
     * @return string
     */
    public function getPackingInstructions(): string
    {
        return $this->packingInstructions;
    }
    /**
     * Coded specification for how commodity is to be packed.<br>Example: packing Instructions
     *
     * @param string $packingInstructions
     *
     * @return self
     */
    public function setPackingInstructions(string $packingInstructions): self
    {
        $this->initialized['packingInstructions'] = true;
        $this->packingInstructions = $packingInstructions;
        return $this;
    }
    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft
     *
     * @return bool
     */
    public function getCargoAircraftOnly(): bool
    {
        return $this->cargoAircraftOnly;
    }
    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft
     *
     * @param bool $cargoAircraftOnly
     *
     * @return self
     */
    public function setCargoAircraftOnly(bool $cargoAircraftOnly): self
    {
        $this->initialized['cargoAircraftOnly'] = true;
        $this->cargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
}