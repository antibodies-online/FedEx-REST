<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributes extends \ArrayObject
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
     * The FedEx service type for the shipment.<br>Example: FEDEX_FREIGHT_PRIORITY
     *
     * @var string
     */
    protected $serviceType;
    /**
     * These are the package weight details.
     *
     * @var PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesweight
     */
    protected $weight;
    /**
     * The FedEx Packaging Type for the shipment.
     *
     * @var string
     */
    protected $packagingType;
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href=" https://www.fedex.com/en-us/service-guide.html# " target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @var PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesdimensions
     */
    protected $dimensions;
    /**
     * The FedEx service type for the shipment.<br>Example: FEDEX_FREIGHT_PRIORITY
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * The FedEx service type for the shipment.<br>Example: FEDEX_FREIGHT_PRIORITY
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * These are the package weight details.
     *
     * @return PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesweight
     */
    public function getWeight(): PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesweight
    {
        return $this->weight;
    }
    /**
     * These are the package weight details.
     *
     * @param PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesweight $weight
     *
     * @return self
     */
    public function setWeight(PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesweight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * The FedEx Packaging Type for the shipment.
     *
     * @return string
     */
    public function getPackagingType(): string
    {
        return $this->packagingType;
    }
    /**
     * The FedEx Packaging Type for the shipment.
     *
     * @param string $packagingType
     *
     * @return self
     */
    public function setPackagingType(string $packagingType): self
    {
        $this->initialized['packagingType'] = true;
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href=" https://www.fedex.com/en-us/service-guide.html# " target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @return PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesdimensions
     */
    public function getDimensions(): PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesdimensions
    {
        return $this->dimensions;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href=" https://www.fedex.com/en-us/service-guide.html# " target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @param PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesdimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesdimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
}