<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItem extends \ArrayObject
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
     * Number of individual handling units to which this line applies.<br> (The total of line-item-level handling units may not balance to shipment-level total handling units.)
     *
     * @var int
     */
    protected $handlingUnits;
    /**
     * Specify the NMFC(National Motor Freight Classification) Code for commodity in order to get a rate quote or create an online freight shipping label or Bill of Lading.<br><i>Example:<ul><li>115030-02</li><li>056828-05</li><li>056828-29</li></ul></i>
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
     * Customer-provided description of this line item.
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemWeight
     */
    protected $weight;
    /**
     * Specifies Total number of pieces.
     *
     * @var int
     */
    protected $pieces;
    /**
     * 
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemVolume
     */
    protected $volume;
    /**
     * Specifies Freight class for this line item.
     *
     * @var string
     */
    protected $freightClass;
    /**
     * Specifies Purchase order number for this line item.
     *
     * @var string
     */
    protected $purchaseOrderNumber;
    /**
     * Specifies Identification for content in this line item.
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
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions along with the unit of measurement must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The Maximum/minimum dimension values vary based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighing for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemDimensions
     */
    protected $dimensions;
    /**
     * Number of individual handling units to which this line applies.<br> (The total of line-item-level handling units may not balance to shipment-level total handling units.)
     *
     * @return int
     */
    public function getHandlingUnits() : int
    {
        return $this->handlingUnits;
    }
    /**
     * Number of individual handling units to which this line applies.<br> (The total of line-item-level handling units may not balance to shipment-level total handling units.)
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
     * Specify the NMFC(National Motor Freight Classification) Code for commodity in order to get a rate quote or create an online freight shipping label or Bill of Lading.<br><i>Example:<ul><li>115030-02</li><li>056828-05</li><li>056828-29</li></ul></i>
     *
     * @return string
     */
    public function getNmfcCode() : string
    {
        return $this->nmfcCode;
    }
    /**
     * Specify the NMFC(National Motor Freight Classification) Code for commodity in order to get a rate quote or create an online freight shipping label or Bill of Lading.<br><i>Example:<ul><li>115030-02</li><li>056828-05</li><li>056828-29</li></ul></i>
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
     * Customer-provided description of this line item.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Customer-provided description of this line item.
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
     * 
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemWeight
     */
    public function getWeight() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemWeight
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemWeight $weight
     *
     * @return self
     */
    public function setWeight(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemWeight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Specifies Total number of pieces.
     *
     * @return int
     */
    public function getPieces() : int
    {
        return $this->pieces;
    }
    /**
     * Specifies Total number of pieces.
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
     * 
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemVolume
     */
    public function getVolume() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemVolume
    {
        return $this->volume;
    }
    /**
     * 
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemVolume $volume
     *
     * @return self
     */
    public function setVolume(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemVolume $volume) : self
    {
        $this->initialized['volume'] = true;
        $this->volume = $volume;
        return $this;
    }
    /**
     * Specifies Freight class for this line item.
     *
     * @return string
     */
    public function getFreightClass() : string
    {
        return $this->freightClass;
    }
    /**
     * Specifies Freight class for this line item.
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
     * Specifies Purchase order number for this line item.
     *
     * @return string
     */
    public function getPurchaseOrderNumber() : string
    {
        return $this->purchaseOrderNumber;
    }
    /**
     * Specifies Purchase order number for this line item.
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
     * Specifies Identification for content in this line item.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Specifies Identification for content in this line item.
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
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions along with the unit of measurement must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The Maximum/minimum dimension values vary based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighing for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemDimensions
     */
    public function getDimensions() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions along with the unit of measurement must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The Maximum/minimum dimension values vary based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighing for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
}