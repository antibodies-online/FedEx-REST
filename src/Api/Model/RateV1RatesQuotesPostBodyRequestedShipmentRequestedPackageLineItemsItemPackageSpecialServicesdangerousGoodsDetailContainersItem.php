<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItem extends \ArrayObject
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
     * Specify the shipper name(offeror) or contact number. Required on all shipping papers.
     *
     * @var string
     */
    protected $offeror;
    /**
     * Specify the kinds and quantities of all hazardous commodities in the current container.
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItem>
     */
    protected $hazardousCommodities;
    /**
     * Indicate the number of containers.
     *
     * @var int
     */
    protected $numberOfContainers;
    /**
     * Indicate the type of container.
     *
     * @var string
     */
    protected $containerType;
    /**
     * Indicates the telephone number to use for contact in the event of an emergency.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemEmergencyContactNumber
     */
    protected $emergencyContactNumber;
    /**
     * Identifies number and type of packaging units for hazardous commodities.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemPackaging
     */
    protected $packaging;
    /**
     * Indicate the packing type used.
     *
     * @var string
     */
    protected $packingType;
    /**
     * Indicate the packaging type of the container used to package the radioactive materials.
     *
     * @var string
     */
    protected $radioactiveContainerClass;
    /**
     * Specify the shipper name(offeror) or contact number. Required on all shipping papers.
     *
     * @return string
     */
    public function getOfferor(): string
    {
        return $this->offeror;
    }
    /**
     * Specify the shipper name(offeror) or contact number. Required on all shipping papers.
     *
     * @param string $offeror
     *
     * @return self
     */
    public function setOfferor(string $offeror): self
    {
        $this->initialized['offeror'] = true;
        $this->offeror = $offeror;
        return $this;
    }
    /**
     * Specify the kinds and quantities of all hazardous commodities in the current container.
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItem>
     */
    public function getHazardousCommodities(): array
    {
        return $this->hazardousCommodities;
    }
    /**
     * Specify the kinds and quantities of all hazardous commodities in the current container.
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItem> $hazardousCommodities
     *
     * @return self
     */
    public function setHazardousCommodities(array $hazardousCommodities): self
    {
        $this->initialized['hazardousCommodities'] = true;
        $this->hazardousCommodities = $hazardousCommodities;
        return $this;
    }
    /**
     * Indicate the number of containers.
     *
     * @return int
     */
    public function getNumberOfContainers(): int
    {
        return $this->numberOfContainers;
    }
    /**
     * Indicate the number of containers.
     *
     * @param int $numberOfContainers
     *
     * @return self
     */
    public function setNumberOfContainers(int $numberOfContainers): self
    {
        $this->initialized['numberOfContainers'] = true;
        $this->numberOfContainers = $numberOfContainers;
        return $this;
    }
    /**
     * Indicate the type of container.
     *
     * @return string
     */
    public function getContainerType(): string
    {
        return $this->containerType;
    }
    /**
     * Indicate the type of container.
     *
     * @param string $containerType
     *
     * @return self
     */
    public function setContainerType(string $containerType): self
    {
        $this->initialized['containerType'] = true;
        $this->containerType = $containerType;
        return $this;
    }
    /**
     * Indicates the telephone number to use for contact in the event of an emergency.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemEmergencyContactNumber
     */
    public function getEmergencyContactNumber(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemEmergencyContactNumber
    {
        return $this->emergencyContactNumber;
    }
    /**
     * Indicates the telephone number to use for contact in the event of an emergency.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemEmergencyContactNumber $emergencyContactNumber
     *
     * @return self
     */
    public function setEmergencyContactNumber(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemEmergencyContactNumber $emergencyContactNumber): self
    {
        $this->initialized['emergencyContactNumber'] = true;
        $this->emergencyContactNumber = $emergencyContactNumber;
        return $this;
    }
    /**
     * Identifies number and type of packaging units for hazardous commodities.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemPackaging
     */
    public function getPackaging(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemPackaging
    {
        return $this->packaging;
    }
    /**
     * Identifies number and type of packaging units for hazardous commodities.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemPackaging $packaging
     *
     * @return self
     */
    public function setPackaging(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemPackaging $packaging): self
    {
        $this->initialized['packaging'] = true;
        $this->packaging = $packaging;
        return $this;
    }
    /**
     * Indicate the packing type used.
     *
     * @return string
     */
    public function getPackingType(): string
    {
        return $this->packingType;
    }
    /**
     * Indicate the packing type used.
     *
     * @param string $packingType
     *
     * @return self
     */
    public function setPackingType(string $packingType): self
    {
        $this->initialized['packingType'] = true;
        $this->packingType = $packingType;
        return $this;
    }
    /**
     * Indicate the packaging type of the container used to package the radioactive materials.
     *
     * @return string
     */
    public function getRadioactiveContainerClass(): string
    {
        return $this->radioactiveContainerClass;
    }
    /**
     * Indicate the packaging type of the container used to package the radioactive materials.
     *
     * @param string $radioactiveContainerClass
     *
     * @return self
     */
    public function setRadioactiveContainerClass(string $radioactiveContainerClass): self
    {
        $this->initialized['radioactiveContainerClass'] = true;
        $this->radioactiveContainerClass = $radioactiveContainerClass;
        return $this;
    }
}