<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescriptionPackingDetails extends \ArrayObject
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
     * Indicates the coded specification for how commodity is to be packed.
     *
     * @var string
     */
    protected $packingInstructions;
    /**
     * Indicates the shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @var bool
     */
    protected $cargoAircraftOnly;
    /**
     * Indicates the coded specification for how commodity is to be packed.
     *
     * @return string
     */
    public function getPackingInstructions(): string
    {
        return $this->packingInstructions;
    }
    /**
     * Indicates the coded specification for how commodity is to be packed.
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
     * Indicates the shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @return bool
     */
    public function getCargoAircraftOnly(): bool
    {
        return $this->cargoAircraftOnly;
    }
    /**
     * Indicates the shipment is packaged/documented for movement ONLY on cargo aircraft.
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