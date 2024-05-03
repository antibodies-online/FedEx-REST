<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescriptionPackingDetails extends \ArrayObject
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
     * Coded specification for how commodity is to be packed.<br>Example: packing Instructions
     *
     * @var string
     */
    protected $packingInstructions;
    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. <br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     *
     * @var bool
     */
    protected $cargoAircraftOnly;
    /**
     * Coded specification for how commodity is to be packed.<br>Example: packing Instructions
     *
     * @return string
     */
    public function getPackingInstructions() : string
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
    public function setPackingInstructions(string $packingInstructions) : self
    {
        $this->initialized['packingInstructions'] = true;
        $this->packingInstructions = $packingInstructions;
        return $this;
    }
    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. <br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     *
     * @return bool
     */
    public function getCargoAircraftOnly() : bool
    {
        return $this->cargoAircraftOnly;
    }
    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. <br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     *
     * @param bool $cargoAircraftOnly
     *
     * @return self
     */
    public function setCargoAircraftOnly(bool $cargoAircraftOnly) : self
    {
        $this->initialized['cargoAircraftOnly'] = true;
        $this->cargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
}