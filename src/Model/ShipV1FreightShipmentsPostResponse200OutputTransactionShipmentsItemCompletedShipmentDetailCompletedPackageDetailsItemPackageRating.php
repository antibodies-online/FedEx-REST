<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRating extends \ArrayObject
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
     * This is the difference between the list and account net charge.<br>Example: 0.0.
     *
     * @var float
     */
    protected $effectiveNetDiscount;
    /**
     * This is the actual rate type. It identifies which entry in the following array is considered as presenting the actual rates for the package.<br>Example: PAYOR_ACCOUNT_PACKAGE.
     *
     * @var string
     */
    protected $actualRateType;
    /**
     * Data for a package's rates, as calculated per a specific rate type.
     *
     * @var list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem>
     */
    protected $packageRateDetails;

    /**
     * This is the difference between the list and account net charge.<br>Example: 0.0.
     */
    public function getEffectiveNetDiscount(): float
    {
        return $this->effectiveNetDiscount;
    }

    /**
     * This is the difference between the list and account net charge.<br>Example: 0.0.
     */
    public function setEffectiveNetDiscount(float $effectiveNetDiscount): self
    {
        $this->initialized['effectiveNetDiscount'] = true;
        $this->effectiveNetDiscount = $effectiveNetDiscount;

        return $this;
    }

    /**
     * This is the actual rate type. It identifies which entry in the following array is considered as presenting the actual rates for the package.<br>Example: PAYOR_ACCOUNT_PACKAGE.
     */
    public function getActualRateType(): string
    {
        return $this->actualRateType;
    }

    /**
     * This is the actual rate type. It identifies which entry in the following array is considered as presenting the actual rates for the package.<br>Example: PAYOR_ACCOUNT_PACKAGE.
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
     * @return list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem>
     */
    public function getPackageRateDetails(): array
    {
        return $this->packageRateDetails;
    }

    /**
     * Data for a package's rates, as calculated per a specific rate type.
     *
     * @param list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem> $packageRateDetails
     */
    public function setPackageRateDetails(array $packageRateDetails): self
    {
        $this->initialized['packageRateDetails'] = true;
        $this->packageRateDetails = $packageRateDetails;

        return $this;
    }
}
