<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem extends \ArrayObject
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
     * This is a physical packaging type used for the package. <br>Example: TUBE, CARTON, CONTAINER. etc.<br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Sub-Packaging Types</a><br>For more information on physical packaging or packaging regulatory requirements, visit FedEx.com or contact your FedEx representative.<br>Note: Sub packaging CAGE is not applicable for LTL Freight shipment.
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
     * Specifies the details of contents of the package.
     *
     * @var list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemContentRecordItem>
     */
    protected $contentRecord;
    /**
     * This is the Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
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
     * Specifies associated freight line items.
     *
     * @var list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemAssociatedFreightLineItemsItem>
     */
    protected $associatedFreightLineItems;
    /**
     * This is a physical packaging type used for the package. <br>Example: TUBE, CARTON, CONTAINER. etc.<br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Sub-Packaging Types</a><br>For more information on physical packaging or packaging regulatory requirements, visit FedEx.com or contact your FedEx representative.<br>Note: Sub packaging CAGE is not applicable for LTL Freight shipment.
     *
     * @return string
     */
    public function getSubPackagingType() : string
    {
        return $this->subPackagingType;
    }
    /**
     * This is a physical packaging type used for the package. <br>Example: TUBE, CARTON, CONTAINER. etc.<br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Sub-Packaging Types</a><br>For more information on physical packaging or packaging regulatory requirements, visit FedEx.com or contact your FedEx representative.<br>Note: Sub packaging CAGE is not applicable for LTL Freight shipment.
     *
     * @param string $subPackagingType
     *
     * @return self
     */
    public function setSubPackagingType(string $subPackagingType) : self
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
    public function getGroupPackageCount() : int
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
    public function setGroupPackageCount(int $groupPackageCount) : self
    {
        $this->initialized['groupPackageCount'] = true;
        $this->groupPackageCount = $groupPackageCount;
        return $this;
    }
    /**
     * Specifies the details of contents of the package.
     *
     * @return list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemContentRecordItem>
     */
    public function getContentRecord() : array
    {
        return $this->contentRecord;
    }
    /**
     * Specifies the details of contents of the package.
     *
     * @param list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemContentRecordItem> $contentRecord
     *
     * @return self
     */
    public function setContentRecord(array $contentRecord) : self
    {
        $this->initialized['contentRecord'] = true;
        $this->contentRecord = $contentRecord;
        return $this;
    }
    /**
     * This is the Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @return mixed
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }
    /**
     * This is the Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @param mixed $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue($declaredValue) : self
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
    public function setWeight($weight) : self
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
    public function setDimensions($dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Specifies associated freight line items.
     *
     * @return list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemAssociatedFreightLineItemsItem>
     */
    public function getAssociatedFreightLineItems() : array
    {
        return $this->associatedFreightLineItems;
    }
    /**
     * Specifies associated freight line items.
     *
     * @param list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemAssociatedFreightLineItemsItem> $associatedFreightLineItems
     *
     * @return self
     */
    public function setAssociatedFreightLineItems(array $associatedFreightLineItems) : self
    {
        $this->initialized['associatedFreightLineItems'] = true;
        $this->associatedFreightLineItems = $associatedFreightLineItems;
        return $this;
    }
}