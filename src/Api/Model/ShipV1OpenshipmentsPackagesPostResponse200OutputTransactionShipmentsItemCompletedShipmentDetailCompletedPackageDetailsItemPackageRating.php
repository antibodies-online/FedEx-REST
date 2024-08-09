<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRating extends \ArrayObject
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
     * This is the difference between the list and account net charge.<br>Example: 0.0
     *
     * @var float
     */
    protected $effectiveNetDiscount;
    /**
     * This is the actual rate type. It identifies which entry in the following array is considered as presenting the actual rates for the package.<br>Example: PAYOR_ACCOUNT_PACKAGE
     *
     * @var string
     */
    protected $actualRateType;
    /**
     * Data for a package's rates, as calculated per a specific rate type.
     *
     * @var list<ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem>
     */
    protected $packageRateDetails;
    /**
     * This is the difference between the list and account net charge.<br>Example: 0.0
     *
     * @return float
     */
    public function getEffectiveNetDiscount(): float
    {
        return $this->effectiveNetDiscount;
    }
    /**
     * This is the difference between the list and account net charge.<br>Example: 0.0
     *
     * @param float $effectiveNetDiscount
     *
     * @return self
     */
    public function setEffectiveNetDiscount(float $effectiveNetDiscount): self
    {
        $this->initialized['effectiveNetDiscount'] = true;
        $this->effectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * This is the actual rate type. It identifies which entry in the following array is considered as presenting the actual rates for the package.<br>Example: PAYOR_ACCOUNT_PACKAGE
     *
     * @return string
     */
    public function getActualRateType(): string
    {
        return $this->actualRateType;
    }
    /**
     * This is the actual rate type. It identifies which entry in the following array is considered as presenting the actual rates for the package.<br>Example: PAYOR_ACCOUNT_PACKAGE
     *
     * @param string $actualRateType
     *
     * @return self
     */
    public function setActualRateType(string $actualRateType): self
    {
        $this->initialized['actualRateType'] = true;
        $this->actualRateType = $actualRateType;
        return $this;
    }
    /**
     * Data for a package's rates, as calculated per a specific rate type.
     *
     * @return list<ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem>
     */
    public function getPackageRateDetails(): array
    {
        return $this->packageRateDetails;
    }
    /**
     * Data for a package's rates, as calculated per a specific rate type.
     *
     * @param list<ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem> $packageRateDetails
     *
     * @return self
     */
    public function setPackageRateDetails(array $packageRateDetails): self
    {
        $this->initialized['packageRateDetails'] = true;
        $this->packageRateDetails = $packageRateDetails;
        return $this;
    }
}