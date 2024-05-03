<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription extends \ArrayObject
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
     * Required<br>Specify the sequence number.<br>Example: 9812.
     *
     * @var int
     */
    protected $sequenceNumber;
    /**
     * Indicates any special processing options to be applied to the description of the dangerous goods commodity <br> Example: ["INCLUDE_SPECIAL_PROVISIONS"].
     *
     * @var list<string>
     */
    protected $processingOptions;
    /**
     * Required.
     *
     * Indicates list of subsidiary classes<br>Example: ["Subsidiary Classes"]
     *
     * @var list<string>
     */
    protected $subsidiaryClasses;
    /**
     * Specifies the text for the label.
     *
     * @var string
     */
    protected $labelText;
    /**
     * Specifies the technical name for the hazardous material.
     *
     * @var string
     */
    protected $technicalName;
    /**
     * Specifies documentation and limits for validation of an individual packing group/category. DG Data Upload Mode: Required (IATA), Optional (Other), DG Full Validation Mode: Required (IATA), Optional (Other),.
     *
     * @var ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescriptionPackingDetails
     */
    protected $packingDetails;
    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @var string
     */
    protected $authorization;
    /**
     * Reportable Quantity.
     *
     * @var bool
     */
    protected $reportableQuantity;
    /**
     * Percentage<br>Example: 12.45.
     *
     * @var float
     */
    protected $percentage;
    /**
     * ID<br>Example: 123.
     *
     * @var string
     */
    protected $id;
    /**
     * Identifies DOT packing group for a hazardous commodity.
     *
     * @var string
     */
    protected $packingGroup;
    /**
     * The proper shipping name as defined by the regulation. The name can also include qualifying words<br>Example: properShippingName.
     *
     * @var string
     */
    protected $properShippingName;
    /**
     * Specifies the hazard class for the commodity<br>Example: hazard Class.
     *
     * @var string
     */
    protected $hazardClass;

    /**
     * Required<br>Specify the sequence number.<br>Example: 9812.
     */
    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }

    /**
     * Required<br>Specify the sequence number.<br>Example: 9812.
     */
    public function setSequenceNumber(int $sequenceNumber): self
    {
        $this->initialized['sequenceNumber'] = true;
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * Indicates any special processing options to be applied to the description of the dangerous goods commodity <br> Example: ["INCLUDE_SPECIAL_PROVISIONS"].
     *
     * @return list<string>
     */
    public function getProcessingOptions(): array
    {
        return $this->processingOptions;
    }

    /**
     * Indicates any special processing options to be applied to the description of the dangerous goods commodity <br> Example: ["INCLUDE_SPECIAL_PROVISIONS"].
     *
     * @param list<string> $processingOptions
     */
    public function setProcessingOptions(array $processingOptions): self
    {
        $this->initialized['processingOptions'] = true;
        $this->processingOptions = $processingOptions;

        return $this;
    }

    /**
     * Required.
     *
     * Indicates list of subsidiary classes<br>Example: ["Subsidiary Classes"]
     *
     * @return list<string>
     */
    public function getSubsidiaryClasses(): array
    {
        return $this->subsidiaryClasses;
    }

    /**
     * Required.
     *
     * Indicates list of subsidiary classes<br>Example: ["Subsidiary Classes"]
     *
     * @param list<string> $subsidiaryClasses
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses): self
    {
        $this->initialized['subsidiaryClasses'] = true;
        $this->subsidiaryClasses = $subsidiaryClasses;

        return $this;
    }

    /**
     * Specifies the text for the label.
     */
    public function getLabelText(): string
    {
        return $this->labelText;
    }

    /**
     * Specifies the text for the label.
     */
    public function setLabelText(string $labelText): self
    {
        $this->initialized['labelText'] = true;
        $this->labelText = $labelText;

        return $this;
    }

    /**
     * Specifies the technical name for the hazardous material.
     */
    public function getTechnicalName(): string
    {
        return $this->technicalName;
    }

    /**
     * Specifies the technical name for the hazardous material.
     */
    public function setTechnicalName(string $technicalName): self
    {
        $this->initialized['technicalName'] = true;
        $this->technicalName = $technicalName;

        return $this;
    }

    /**
     * Specifies documentation and limits for validation of an individual packing group/category. DG Data Upload Mode: Required (IATA), Optional (Other), DG Full Validation Mode: Required (IATA), Optional (Other),.
     */
    public function getPackingDetails(): ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescriptionPackingDetails
    {
        return $this->packingDetails;
    }

    /**
     * Specifies documentation and limits for validation of an individual packing group/category. DG Data Upload Mode: Required (IATA), Optional (Other), DG Full Validation Mode: Required (IATA), Optional (Other),.
     */
    public function setPackingDetails(ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescriptionPackingDetails $packingDetails): self
    {
        $this->initialized['packingDetails'] = true;
        $this->packingDetails = $packingDetails;

        return $this;
    }

    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     */
    public function getAuthorization(): string
    {
        return $this->authorization;
    }

    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     */
    public function setAuthorization(string $authorization): self
    {
        $this->initialized['authorization'] = true;
        $this->authorization = $authorization;

        return $this;
    }

    /**
     * Reportable Quantity.
     */
    public function getReportableQuantity(): bool
    {
        return $this->reportableQuantity;
    }

    /**
     * Reportable Quantity.
     */
    public function setReportableQuantity(bool $reportableQuantity): self
    {
        $this->initialized['reportableQuantity'] = true;
        $this->reportableQuantity = $reportableQuantity;

        return $this;
    }

    /**
     * Percentage<br>Example: 12.45.
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    /**
     * Percentage<br>Example: 12.45.
     */
    public function setPercentage(float $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * ID<br>Example: 123.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * ID<br>Example: 123.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Identifies DOT packing group for a hazardous commodity.
     */
    public function getPackingGroup(): string
    {
        return $this->packingGroup;
    }

    /**
     * Identifies DOT packing group for a hazardous commodity.
     */
    public function setPackingGroup(string $packingGroup): self
    {
        $this->initialized['packingGroup'] = true;
        $this->packingGroup = $packingGroup;

        return $this;
    }

    /**
     * The proper shipping name as defined by the regulation. The name can also include qualifying words<br>Example: properShippingName.
     */
    public function getProperShippingName(): string
    {
        return $this->properShippingName;
    }

    /**
     * The proper shipping name as defined by the regulation. The name can also include qualifying words<br>Example: properShippingName.
     */
    public function setProperShippingName(string $properShippingName): self
    {
        $this->initialized['properShippingName'] = true;
        $this->properShippingName = $properShippingName;

        return $this;
    }

    /**
     * Specifies the hazard class for the commodity<br>Example: hazard Class.
     */
    public function getHazardClass(): string
    {
        return $this->hazardClass;
    }

    /**
     * Specifies the hazard class for the commodity<br>Example: hazard Class.
     */
    public function setHazardClass(string $hazardClass): self
    {
        $this->initialized['hazardClass'] = true;
        $this->hazardClass = $hazardClass;

        return $this;
    }
}
