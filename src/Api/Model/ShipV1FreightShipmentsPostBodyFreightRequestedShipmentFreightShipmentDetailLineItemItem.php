<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem extends \ArrayObject
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
     * Number of individual handling units to which this line applies. (NOTE: Total of line-item-level handling units may not balance to shipment-level total handling units.)<br> Example: 12
     *
     * @var int
     */
    protected $handlingUnits;
    /**
     * Specify the NMFC(National Motor Freight Classification) Code for commodity in order to get a rate quote or create an  online freight shipping label or Bill of Lading.<br><i>Example:<ul><li>115030-02</li><li>056828-05</li><li>056828-29</li></ul></i>
     *
     * @var string
     */
    protected $nmfcCode;
    /**
     * This is a sub package type for the package.<br><a href='/api/en-us/guides/api-reference.html#subpackagetypes' target='_blank'>Click here to see Sub-Package Types </a>
     *
     * @var string
     */
    protected $subPackagingType;
    /**
     * Customer-provided description of this line item.<br>Example: description
     *
     * @var string
     */
    protected $description;
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemWeight
     */
    protected $weight;
    /**
     * Total number of pieces.<br> Example: 12
     *
     * @var int
     */
    protected $pieces;
    /**
     * Specifies volume (cubic measure) for this commodity.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemVolume
     */
    protected $volume;
    /**
     * Required.<br>Freight class for this line item.
     *
     * @var string
     */
    protected $freightClass;
    /**
     * Indicates the purchase order number for printed reference.<br>Example: 50
     *
     * @var string
     */
    protected $purchaseOrderNumber;
    /**
     * Indicates the ID for the box.<br> Example: 123
     *
     * @var string
     */
    protected $id;
    /**
     * Indicates the kind of hazardous material content in this line item.
     *
     * @var string
     */
    protected $hazardousMaterials;
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemDimensions
     */
    protected $dimensions;
    /**
     * The estimate freight class from customer-provided dimensions and weight.
     *
     * @var bool
     */
    protected $classProvidedByCustomer;
    /**
     * Number of individual handling units to which this line applies. (NOTE: Total of line-item-level handling units may not balance to shipment-level total handling units.)<br> Example: 12
     *
     * @return int
     */
    public function getHandlingUnits() : int
    {
        return $this->handlingUnits;
    }
    /**
     * Number of individual handling units to which this line applies. (NOTE: Total of line-item-level handling units may not balance to shipment-level total handling units.)<br> Example: 12
     *
     * @param int $handlingUnits
     *
     * @return self
     */
    public function setHandlingUnits(int $handlingUnits) : self
    {
        $this->initialized['handlingUnits'] = true;
        $this->handlingUnits = $handlingUnits;
        return $this;
    }
    /**
     * Specify the NMFC(National Motor Freight Classification) Code for commodity in order to get a rate quote or create an  online freight shipping label or Bill of Lading.<br><i>Example:<ul><li>115030-02</li><li>056828-05</li><li>056828-29</li></ul></i>
     *
     * @return string
     */
    public function getNmfcCode() : string
    {
        return $this->nmfcCode;
    }
    /**
     * Specify the NMFC(National Motor Freight Classification) Code for commodity in order to get a rate quote or create an  online freight shipping label or Bill of Lading.<br><i>Example:<ul><li>115030-02</li><li>056828-05</li><li>056828-29</li></ul></i>
     *
     * @param string $nmfcCode
     *
     * @return self
     */
    public function setNmfcCode(string $nmfcCode) : self
    {
        $this->initialized['nmfcCode'] = true;
        $this->nmfcCode = $nmfcCode;
        return $this;
    }
    /**
     * This is a sub package type for the package.<br><a href='/api/en-us/guides/api-reference.html#subpackagetypes' target='_blank'>Click here to see Sub-Package Types </a>
     *
     * @return string
     */
    public function getSubPackagingType() : string
    {
        return $this->subPackagingType;
    }
    /**
     * This is a sub package type for the package.<br><a href='/api/en-us/guides/api-reference.html#subpackagetypes' target='_blank'>Click here to see Sub-Package Types </a>
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
     * Customer-provided description of this line item.<br>Example: description
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Customer-provided description of this line item.<br>Example: description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemWeight
     */
    public function getWeight() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemWeight
    {
        return $this->weight;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemWeight $weight
     *
     * @return self
     */
    public function setWeight(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemWeight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Total number of pieces.<br> Example: 12
     *
     * @return int
     */
    public function getPieces() : int
    {
        return $this->pieces;
    }
    /**
     * Total number of pieces.<br> Example: 12
     *
     * @param int $pieces
     *
     * @return self
     */
    public function setPieces(int $pieces) : self
    {
        $this->initialized['pieces'] = true;
        $this->pieces = $pieces;
        return $this;
    }
    /**
     * Specifies volume (cubic measure) for this commodity.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemVolume
     */
    public function getVolume() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemVolume
    {
        return $this->volume;
    }
    /**
     * Specifies volume (cubic measure) for this commodity.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemVolume $volume
     *
     * @return self
     */
    public function setVolume(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemVolume $volume) : self
    {
        $this->initialized['volume'] = true;
        $this->volume = $volume;
        return $this;
    }
    /**
     * Required.<br>Freight class for this line item.
     *
     * @return string
     */
    public function getFreightClass() : string
    {
        return $this->freightClass;
    }
    /**
     * Required.<br>Freight class for this line item.
     *
     * @param string $freightClass
     *
     * @return self
     */
    public function setFreightClass(string $freightClass) : self
    {
        $this->initialized['freightClass'] = true;
        $this->freightClass = $freightClass;
        return $this;
    }
    /**
     * Indicates the purchase order number for printed reference.<br>Example: 50
     *
     * @return string
     */
    public function getPurchaseOrderNumber() : string
    {
        return $this->purchaseOrderNumber;
    }
    /**
     * Indicates the purchase order number for printed reference.<br>Example: 50
     *
     * @param string $purchaseOrderNumber
     *
     * @return self
     */
    public function setPurchaseOrderNumber(string $purchaseOrderNumber) : self
    {
        $this->initialized['purchaseOrderNumber'] = true;
        $this->purchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    /**
     * Indicates the ID for the box.<br> Example: 123
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Indicates the ID for the box.<br> Example: 123
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Indicates the kind of hazardous material content in this line item.
     *
     * @return string
     */
    public function getHazardousMaterials() : string
    {
        return $this->hazardousMaterials;
    }
    /**
     * Indicates the kind of hazardous material content in this line item.
     *
     * @param string $hazardousMaterials
     *
     * @return self
     */
    public function setHazardousMaterials(string $hazardousMaterials) : self
    {
        $this->initialized['hazardousMaterials'] = true;
        $this->hazardousMaterials = $hazardousMaterials;
        return $this;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemDimensions
     */
    public function getDimensions() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * The estimate freight class from customer-provided dimensions and weight.
     *
     * @return bool
     */
    public function getClassProvidedByCustomer() : bool
    {
        return $this->classProvidedByCustomer;
    }
    /**
     * The estimate freight class from customer-provided dimensions and weight.
     *
     * @param bool $classProvidedByCustomer
     *
     * @return self
     */
    public function setClassProvidedByCustomer(bool $classProvidedByCustomer) : self
    {
        $this->initialized['classProvidedByCustomer'] = true;
        $this->classProvidedByCustomer = $classProvidedByCustomer;
        return $this;
    }
}