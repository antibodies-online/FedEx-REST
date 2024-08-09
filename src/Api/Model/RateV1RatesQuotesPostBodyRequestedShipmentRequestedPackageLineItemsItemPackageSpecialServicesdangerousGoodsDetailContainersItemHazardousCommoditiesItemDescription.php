<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescription extends \ArrayObject
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
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     *
     * @var int
     */
    protected $sequenceNumber;
    /**
     * Indicates any special processing options to be applied to the description of the dangerous goods commodity.
     *
     * @var list<string>
     */
    protected $processingOptions;
    /**
     * Specifies the hazardous material subsidiary classes.
     *
     * @var list<string>
     */
    protected $subsidiaryClasses;
    /**
     * Specifies the DOT diamond hazard label type. This element can also include limited quantity or exemption number.
     *
     * @var string
     */
    protected $labelText;
    /**
     * Specify the technical name for the hazardous commodity.
     *
     * @var string
     */
    protected $technicalName;
    /**
     * Specifies documentation and limits for validation of an individual packing group/category.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescriptionPackingDetails
     */
    protected $packingDetails;
    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @var string
     */
    protected $authorization;
    /**
     * The element specifies the reportable quantity of the hazardous material.
     *
     * @var bool
     */
    protected $reportableQuantity;
    /**
     * Indicates the percentage.
     *
     * @var float
     */
    protected $percentage;
    /**
     * Specifies the ID of label text.
     *
     * @var string
     */
    protected $id;
    /**
     * Identifies IATA packing group for a hazardous commodity.
     *
     * @var string
     */
    protected $packingGroup;
    /**
     * The proper shipping name as defined by the regulation.<br>The name can also include qualifying words.
     *
     * @var string
     */
    protected $properShippingName;
    /**
     * Specify hazard class for commodity.
     *
     * @var string
     */
    protected $hazardClass;
    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     *
     * @return int
     */
    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }
    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     *
     * @param int $sequenceNumber
     *
     * @return self
     */
    public function setSequenceNumber(int $sequenceNumber): self
    {
        $this->initialized['sequenceNumber'] = true;
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Indicates any special processing options to be applied to the description of the dangerous goods commodity.
     *
     * @return list<string>
     */
    public function getProcessingOptions(): array
    {
        return $this->processingOptions;
    }
    /**
     * Indicates any special processing options to be applied to the description of the dangerous goods commodity.
     *
     * @param list<string> $processingOptions
     *
     * @return self
     */
    public function setProcessingOptions(array $processingOptions): self
    {
        $this->initialized['processingOptions'] = true;
        $this->processingOptions = $processingOptions;
        return $this;
    }
    /**
     * Specifies the hazardous material subsidiary classes.
     *
     * @return list<string>
     */
    public function getSubsidiaryClasses(): array
    {
        return $this->subsidiaryClasses;
    }
    /**
     * Specifies the hazardous material subsidiary classes.
     *
     * @param list<string> $subsidiaryClasses
     *
     * @return self
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses): self
    {
        $this->initialized['subsidiaryClasses'] = true;
        $this->subsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    /**
     * Specifies the DOT diamond hazard label type. This element can also include limited quantity or exemption number.
     *
     * @return string
     */
    public function getLabelText(): string
    {
        return $this->labelText;
    }
    /**
     * Specifies the DOT diamond hazard label type. This element can also include limited quantity or exemption number.
     *
     * @param string $labelText
     *
     * @return self
     */
    public function setLabelText(string $labelText): self
    {
        $this->initialized['labelText'] = true;
        $this->labelText = $labelText;
        return $this;
    }
    /**
     * Specify the technical name for the hazardous commodity.
     *
     * @return string
     */
    public function getTechnicalName(): string
    {
        return $this->technicalName;
    }
    /**
     * Specify the technical name for the hazardous commodity.
     *
     * @param string $technicalName
     *
     * @return self
     */
    public function setTechnicalName(string $technicalName): self
    {
        $this->initialized['technicalName'] = true;
        $this->technicalName = $technicalName;
        return $this;
    }
    /**
     * Specifies documentation and limits for validation of an individual packing group/category.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescriptionPackingDetails
     */
    public function getPackingDetails(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescriptionPackingDetails
    {
        return $this->packingDetails;
    }
    /**
     * Specifies documentation and limits for validation of an individual packing group/category.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescriptionPackingDetails $packingDetails
     *
     * @return self
     */
    public function setPackingDetails(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemDescriptionPackingDetails $packingDetails): self
    {
        $this->initialized['packingDetails'] = true;
        $this->packingDetails = $packingDetails;
        return $this;
    }
    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @return string
     */
    public function getAuthorization(): string
    {
        return $this->authorization;
    }
    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @param string $authorization
     *
     * @return self
     */
    public function setAuthorization(string $authorization): self
    {
        $this->initialized['authorization'] = true;
        $this->authorization = $authorization;
        return $this;
    }
    /**
     * The element specifies the reportable quantity of the hazardous material.
     *
     * @return bool
     */
    public function getReportableQuantity(): bool
    {
        return $this->reportableQuantity;
    }
    /**
     * The element specifies the reportable quantity of the hazardous material.
     *
     * @param bool $reportableQuantity
     *
     * @return self
     */
    public function setReportableQuantity(bool $reportableQuantity): self
    {
        $this->initialized['reportableQuantity'] = true;
        $this->reportableQuantity = $reportableQuantity;
        return $this;
    }
    /**
     * Indicates the percentage.
     *
     * @return float
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }
    /**
     * Indicates the percentage.
     *
     * @param float $percentage
     *
     * @return self
     */
    public function setPercentage(float $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * Specifies the ID of label text.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Specifies the ID of label text.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Identifies IATA packing group for a hazardous commodity.
     *
     * @return string
     */
    public function getPackingGroup(): string
    {
        return $this->packingGroup;
    }
    /**
     * Identifies IATA packing group for a hazardous commodity.
     *
     * @param string $packingGroup
     *
     * @return self
     */
    public function setPackingGroup(string $packingGroup): self
    {
        $this->initialized['packingGroup'] = true;
        $this->packingGroup = $packingGroup;
        return $this;
    }
    /**
     * The proper shipping name as defined by the regulation.<br>The name can also include qualifying words.
     *
     * @return string
     */
    public function getProperShippingName(): string
    {
        return $this->properShippingName;
    }
    /**
     * The proper shipping name as defined by the regulation.<br>The name can also include qualifying words.
     *
     * @param string $properShippingName
     *
     * @return self
     */
    public function setProperShippingName(string $properShippingName): self
    {
        $this->initialized['properShippingName'] = true;
        $this->properShippingName = $properShippingName;
        return $this;
    }
    /**
     * Specify hazard class for commodity.
     *
     * @return string
     */
    public function getHazardClass(): string
    {
        return $this->hazardClass;
    }
    /**
     * Specify hazard class for commodity.
     *
     * @param string $hazardClass
     *
     * @return self
     */
    public function setHazardClass(string $hazardClass): self
    {
        $this->initialized['hazardClass'] = true;
        $this->hazardClass = $hazardClass;
        return $this;
    }
}