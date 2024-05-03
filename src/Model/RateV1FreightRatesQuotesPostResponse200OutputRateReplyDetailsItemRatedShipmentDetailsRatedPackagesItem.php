<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsRatedPackagesItem extends \ArrayObject
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
     * This is the  list net charge minus actual net charge.<br> Example: 1.0
     *
     * @var float
     */
    protected $effectiveNetDiscount;
    /**
     * Data for a package's rates, as calculated per a specific rate type.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsRatedPackagesItemPackageRateDetail
     */
    protected $packageRateDetail;
    /**
     * This is group number, used only with package groups as a unique identifier of each group of identical packages.
     *
     * @var int
     */
    protected $groupNumber;
    /**
     * This is the  list net charge minus actual net charge.<br> Example: 1.0
     *
     * @return float
     */
    public function getEffectiveNetDiscount() : float
    {
        return $this->effectiveNetDiscount;
    }
    /**
     * This is the  list net charge minus actual net charge.<br> Example: 1.0
     *
     * @param float $effectiveNetDiscount
     *
     * @return self
     */
    public function setEffectiveNetDiscount(float $effectiveNetDiscount) : self
    {
        $this->initialized['effectiveNetDiscount'] = true;
        $this->effectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Data for a package's rates, as calculated per a specific rate type.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsRatedPackagesItemPackageRateDetail
     */
    public function getPackageRateDetail() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsRatedPackagesItemPackageRateDetail
    {
        return $this->packageRateDetail;
    }
    /**
     * Data for a package's rates, as calculated per a specific rate type.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsRatedPackagesItemPackageRateDetail $packageRateDetail
     *
     * @return self
     */
    public function setPackageRateDetail(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsRatedPackagesItemPackageRateDetail $packageRateDetail) : self
    {
        $this->initialized['packageRateDetail'] = true;
        $this->packageRateDetail = $packageRateDetail;
        return $this;
    }
    /**
     * This is group number, used only with package groups as a unique identifier of each group of identical packages.
     *
     * @return int
     */
    public function getGroupNumber() : int
    {
        return $this->groupNumber;
    }
    /**
     * This is group number, used only with package groups as a unique identifier of each group of identical packages.
     *
     * @param int $groupNumber
     *
     * @return self
     */
    public function setGroupNumber(int $groupNumber) : self
    {
        $this->initialized['groupNumber'] = true;
        $this->groupNumber = $groupNumber;
        return $this;
    }
}