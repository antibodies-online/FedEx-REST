<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetail extends \ArrayObject
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
    * Optional
    This is the liability coverage type.
    *
    * @var string
    */
    protected $coverageType;
    /**
     * Specifies the Liability Coverage Amount & Currency used for Freight Shipment.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetailcoverageAmount
     */
    protected $coverageAmount;
    /**
    * Optional
    This is the liability coverage type.
    *
    * @return string
    */
    public function getCoverageType(): string
    {
        return $this->coverageType;
    }
    /**
    * Optional
    This is the liability coverage type.
    *
    * @param string $coverageType
    *
    * @return self
    */
    public function setCoverageType(string $coverageType): self
    {
        $this->initialized['coverageType'] = true;
        $this->coverageType = $coverageType;
        return $this;
    }
    /**
     * Specifies the Liability Coverage Amount & Currency used for Freight Shipment.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetailcoverageAmount
     */
    public function getCoverageAmount(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetailcoverageAmount
    {
        return $this->coverageAmount;
    }
    /**
     * Specifies the Liability Coverage Amount & Currency used for Freight Shipment.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetailcoverageAmount $coverageAmount
     *
     * @return self
     */
    public function setCoverageAmount(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetailcoverageAmount $coverageAmount): self
    {
        $this->initialized['coverageAmount'] = true;
        $this->coverageAmount = $coverageAmount;
        return $this;
    }
}