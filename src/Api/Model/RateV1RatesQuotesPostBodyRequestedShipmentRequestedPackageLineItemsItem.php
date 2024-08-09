<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem extends \ArrayObject
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
     * This is a physical packaging type used for the package. <br><a onclick='loadDocReference("subpackagetypes")'>Click here to see sub-packaging types</a><br>For more information on physical packaging or packaging regulatory requirements, visit fedex.com or contact your FedEx representative.
     *
     * @var string
     */
    protected $subPackagingType;
    /**
     * Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     *
     * @var int
     */
    protected $groupPackageCount;
    /**
     * Specifies the content record.
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemContentRecordItem>
     */
    protected $contentRecord;
    /**
     * This is the Declared Value - represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @var mixed
     */
    protected $declaredValue;
    /**
     * Indicate the total weight of the requested package line items.
     *
     * @var mixed
     */
    protected $weight;
    /**
     * Specify the dimensions of this package and the unit type used for the measurements. Valid measurements are whole numbers greater than zero.
     *
     * @var mixed
     */
    protected $dimensions;
    /**
     * Indicate the details on how to calculate variable handling charges at the package level. If indicated, element rateLevelType is required.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail
     */
    protected $variableHandlingChargeDetail;
    /**
     * These special services are available at the package level for some or all service types.  Indicated if rate data is being requested for the special services.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices
     */
    protected $packageSpecialServices;
    /**
     * This is a physical packaging type used for the package. <br><a onclick='loadDocReference("subpackagetypes")'>Click here to see sub-packaging types</a><br>For more information on physical packaging or packaging regulatory requirements, visit fedex.com or contact your FedEx representative.
     *
     * @return string
     */
    public function getSubPackagingType(): string
    {
        return $this->subPackagingType;
    }
    /**
     * This is a physical packaging type used for the package. <br><a onclick='loadDocReference("subpackagetypes")'>Click here to see sub-packaging types</a><br>For more information on physical packaging or packaging regulatory requirements, visit fedex.com or contact your FedEx representative.
     *
     * @param string $subPackagingType
     *
     * @return self
     */
    public function setSubPackagingType(string $subPackagingType): self
    {
        $this->initialized['subPackagingType'] = true;
        $this->subPackagingType = $subPackagingType;
        return $this;
    }
    /**
     * Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     *
     * @return int
     */
    public function getGroupPackageCount(): int
    {
        return $this->groupPackageCount;
    }
    /**
     * Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     *
     * @param int $groupPackageCount
     *
     * @return self
     */
    public function setGroupPackageCount(int $groupPackageCount): self
    {
        $this->initialized['groupPackageCount'] = true;
        $this->groupPackageCount = $groupPackageCount;
        return $this;
    }
    /**
     * Specifies the content record.
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemContentRecordItem>
     */
    public function getContentRecord(): array
    {
        return $this->contentRecord;
    }
    /**
     * Specifies the content record.
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemContentRecordItem> $contentRecord
     *
     * @return self
     */
    public function setContentRecord(array $contentRecord): self
    {
        $this->initialized['contentRecord'] = true;
        $this->contentRecord = $contentRecord;
        return $this;
    }
    /**
     * This is the Declared Value - represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @return mixed
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }
    /**
     * This is the Declared Value - represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @param mixed $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue($declaredValue): self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;
        return $this;
    }
    /**
     * Indicate the total weight of the requested package line items.
     *
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Indicate the total weight of the requested package line items.
     *
     * @param mixed $weight
     *
     * @return self
     */
    public function setWeight($weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Specify the dimensions of this package and the unit type used for the measurements. Valid measurements are whole numbers greater than zero.
     *
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }
    /**
     * Specify the dimensions of this package and the unit type used for the measurements. Valid measurements are whole numbers greater than zero.
     *
     * @param mixed $dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Indicate the details on how to calculate variable handling charges at the package level. If indicated, element rateLevelType is required.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail
    {
        return $this->variableHandlingChargeDetail;
    }
    /**
     * Indicate the details on how to calculate variable handling charges at the package level. If indicated, element rateLevelType is required.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail $variableHandlingChargeDetail
     *
     * @return self
     */
    public function setVariableHandlingChargeDetail(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail $variableHandlingChargeDetail): self
    {
        $this->initialized['variableHandlingChargeDetail'] = true;
        $this->variableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * These special services are available at the package level for some or all service types.  Indicated if rate data is being requested for the special services.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices
     */
    public function getPackageSpecialServices(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices
    {
        return $this->packageSpecialServices;
    }
    /**
     * These special services are available at the package level for some or all service types.  Indicated if rate data is being requested for the special services.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices $packageSpecialServices
     *
     * @return self
     */
    public function setPackageSpecialServices(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices $packageSpecialServices): self
    {
        $this->initialized['packageSpecialServices'] = true;
        $this->packageSpecialServices = $packageSpecialServices;
        return $this;
    }
}