<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices extends \ArrayObject
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
     * Indicate the special services  requested.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Type of a Signature Option.
     *
     * @var string
     */
    protected $signatureOptionType;
    /**
     * Indicate the alcohol shipment details. This object is mandatory if alcohol special service is selected.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesalcoholDetail
     */
    protected $alcoholDetail;
    /**
     * Use this object to specify Dangerous Goods shipment Detail.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail
     */
    protected $dangerousGoodsDetail;
    /**
     * Indicates package COD Detail.  COD main information is set in shipment level.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetail
     */
    protected $packageCODDetail;
    /**
     * Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     *
     * @var int
     */
    protected $pieceCountVerificationBoxCount;
    /**
     * Specify the details about the batteries or cells that are contained within this specific package.
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesbatteryDetailsItem>
     */
    protected $batteryDetails;
    /**
     * These are the weight details.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdryIceWeight
     */
    protected $dryIceWeight;
    /**
     * Indicate the special services  requested.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes(): array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Indicate the special services  requested.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     * @param list<string> $specialServiceTypes
     *
     * @return self
     */
    public function setSpecialServiceTypes(array $specialServiceTypes): self
    {
        $this->initialized['specialServiceTypes'] = true;
        $this->specialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Type of a Signature Option.
     *
     * @return string
     */
    public function getSignatureOptionType(): string
    {
        return $this->signatureOptionType;
    }
    /**
     * Type of a Signature Option.
     *
     * @param string $signatureOptionType
     *
     * @return self
     */
    public function setSignatureOptionType(string $signatureOptionType): self
    {
        $this->initialized['signatureOptionType'] = true;
        $this->signatureOptionType = $signatureOptionType;
        return $this;
    }
    /**
     * Indicate the alcohol shipment details. This object is mandatory if alcohol special service is selected.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesalcoholDetail
     */
    public function getAlcoholDetail(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesalcoholDetail
    {
        return $this->alcoholDetail;
    }
    /**
     * Indicate the alcohol shipment details. This object is mandatory if alcohol special service is selected.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesalcoholDetail $alcoholDetail
     *
     * @return self
     */
    public function setAlcoholDetail(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesalcoholDetail $alcoholDetail): self
    {
        $this->initialized['alcoholDetail'] = true;
        $this->alcoholDetail = $alcoholDetail;
        return $this;
    }
    /**
     * Use this object to specify Dangerous Goods shipment Detail.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail
     */
    public function getDangerousGoodsDetail(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail
    {
        return $this->dangerousGoodsDetail;
    }
    /**
     * Use this object to specify Dangerous Goods shipment Detail.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail $dangerousGoodsDetail
     *
     * @return self
     */
    public function setDangerousGoodsDetail(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetail $dangerousGoodsDetail): self
    {
        $this->initialized['dangerousGoodsDetail'] = true;
        $this->dangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * Indicates package COD Detail.  COD main information is set in shipment level.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetail
     */
    public function getPackageCODDetail(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetail
    {
        return $this->packageCODDetail;
    }
    /**
     * Indicates package COD Detail.  COD main information is set in shipment level.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetail $packageCODDetail
     *
     * @return self
     */
    public function setPackageCODDetail(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetail $packageCODDetail): self
    {
        $this->initialized['packageCODDetail'] = true;
        $this->packageCODDetail = $packageCODDetail;
        return $this;
    }
    /**
     * Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     *
     * @return int
     */
    public function getPieceCountVerificationBoxCount(): int
    {
        return $this->pieceCountVerificationBoxCount;
    }
    /**
     * Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     *
     * @param int $pieceCountVerificationBoxCount
     *
     * @return self
     */
    public function setPieceCountVerificationBoxCount(int $pieceCountVerificationBoxCount): self
    {
        $this->initialized['pieceCountVerificationBoxCount'] = true;
        $this->pieceCountVerificationBoxCount = $pieceCountVerificationBoxCount;
        return $this;
    }
    /**
     * Specify the details about the batteries or cells that are contained within this specific package.
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesbatteryDetailsItem>
     */
    public function getBatteryDetails(): array
    {
        return $this->batteryDetails;
    }
    /**
     * Specify the details about the batteries or cells that are contained within this specific package.
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesbatteryDetailsItem> $batteryDetails
     *
     * @return self
     */
    public function setBatteryDetails(array $batteryDetails): self
    {
        $this->initialized['batteryDetails'] = true;
        $this->batteryDetails = $batteryDetails;
        return $this;
    }
    /**
     * These are the weight details.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdryIceWeight
     */
    public function getDryIceWeight(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdryIceWeight
    {
        return $this->dryIceWeight;
    }
    /**
     * These are the weight details.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdryIceWeight $dryIceWeight
     *
     * @return self
     */
    public function setDryIceWeight(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdryIceWeight $dryIceWeight): self
    {
        $this->initialized['dryIceWeight'] = true;
        $this->dryIceWeight = $dryIceWeight;
        return $this;
    }
}