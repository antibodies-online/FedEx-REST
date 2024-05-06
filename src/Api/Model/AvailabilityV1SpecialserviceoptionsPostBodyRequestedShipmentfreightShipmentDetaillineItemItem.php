<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem extends \ArrayObject
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
     * Optional <br> Total number of pieces <br> Example: 1
     *
     * @var int
     */
    protected $pieces;
    /**
     * Individual line item volume. <br>                Conditionally required. <br> Need volume for intra mexico rates
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItemVolume
     */
    protected $volume;
    /**
     * Optional<br>Number of individual handling units to which this line applies. (NOTE - Total of line-item-level handling units may not balance to shipment-level total handling units) <br> Example: 1
     *
     * @var int
     */
    protected $handlingUnits;
    /**
     * Specify the freight class based on the item to be shipped and its weight measured per unit volume(Example: Kilograms per Cubic Meter) the shipment is categorized accordingly.<a href='http://www.fedex.com/en-us/shipping/freight/class-calculator.html' target='_blank'>Click here</a> to use Freight class calculator
     *
     * @var string
     */
    protected $freightClass;
    /**
     * Customer-provided description of this line item <br> Example: Description
     *
     * @var string
     */
    protected $description;
    /**
     * Total weight of items for this line item
     *
     * @var mixed
     */
    protected $weight;
    /**
     * Packaging type for this line item <br> Example: SELFPACKAGE
     *
     * @var string
     */
    protected $packaging;
    /**
     * defaults to false. FEDEX INTERNAL USE ONLY for FedEx system that estimate freight class from customer-provided dimensions and weight <br> Example: true
     *
     * @var bool
     */
    protected $classProvidedByCustomer;
    /**
     * Indicates the kind of hazardous material content in this line item <br> Example: HAZARDOUS_MATERIALS
     *
     * @var string
     */
    protected $hazardousMaterials;
    /**
     * Individual line item dimensions. Conditionally required. Need volume for intra mexico rates.
     *
     * @var mixed
     */
    protected $dimensions;
    /**
     * Optional <br> Total number of pieces <br> Example: 1
     *
     * @return int
     */
    public function getPieces() : int
    {
        return $this->pieces;
    }
    /**
     * Optional <br> Total number of pieces <br> Example: 1
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
     * Individual line item volume. <br>                Conditionally required. <br> Need volume for intra mexico rates
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItemVolume
     */
    public function getVolume() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItemVolume
    {
        return $this->volume;
    }
    /**
     * Individual line item volume. <br>                Conditionally required. <br> Need volume for intra mexico rates
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItemVolume $volume
     *
     * @return self
     */
    public function setVolume(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItemVolume $volume) : self
    {
        $this->initialized['volume'] = true;
        $this->volume = $volume;
        return $this;
    }
    /**
     * Optional<br>Number of individual handling units to which this line applies. (NOTE - Total of line-item-level handling units may not balance to shipment-level total handling units) <br> Example: 1
     *
     * @return int
     */
    public function getHandlingUnits() : int
    {
        return $this->handlingUnits;
    }
    /**
     * Optional<br>Number of individual handling units to which this line applies. (NOTE - Total of line-item-level handling units may not balance to shipment-level total handling units) <br> Example: 1
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
     * Specify the freight class based on the item to be shipped and its weight measured per unit volume(Example: Kilograms per Cubic Meter) the shipment is categorized accordingly.<a href='http://www.fedex.com/en-us/shipping/freight/class-calculator.html' target='_blank'>Click here</a> to use Freight class calculator
     *
     * @return string
     */
    public function getFreightClass() : string
    {
        return $this->freightClass;
    }
    /**
     * Specify the freight class based on the item to be shipped and its weight measured per unit volume(Example: Kilograms per Cubic Meter) the shipment is categorized accordingly.<a href='http://www.fedex.com/en-us/shipping/freight/class-calculator.html' target='_blank'>Click here</a> to use Freight class calculator
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
     * Customer-provided description of this line item <br> Example: Description
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Customer-provided description of this line item <br> Example: Description
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
     * Total weight of items for this line item
     *
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Total weight of items for this line item
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
     * Packaging type for this line item <br> Example: SELFPACKAGE
     *
     * @return string
     */
    public function getPackaging() : string
    {
        return $this->packaging;
    }
    /**
     * Packaging type for this line item <br> Example: SELFPACKAGE
     *
     * @param string $packaging
     *
     * @return self
     */
    public function setPackaging(string $packaging) : self
    {
        $this->initialized['packaging'] = true;
        $this->packaging = $packaging;
        return $this;
    }
    /**
     * defaults to false. FEDEX INTERNAL USE ONLY for FedEx system that estimate freight class from customer-provided dimensions and weight <br> Example: true
     *
     * @return bool
     */
    public function getClassProvidedByCustomer() : bool
    {
        return $this->classProvidedByCustomer;
    }
    /**
     * defaults to false. FEDEX INTERNAL USE ONLY for FedEx system that estimate freight class from customer-provided dimensions and weight <br> Example: true
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
    /**
     * Indicates the kind of hazardous material content in this line item <br> Example: HAZARDOUS_MATERIALS
     *
     * @return string
     */
    public function getHazardousMaterials() : string
    {
        return $this->hazardousMaterials;
    }
    /**
     * Indicates the kind of hazardous material content in this line item <br> Example: HAZARDOUS_MATERIALS
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
     * Individual line item dimensions. Conditionally required. Need volume for intra mexico rates.
     *
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }
    /**
     * Individual line item dimensions. Conditionally required. Need volume for intra mexico rates.
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
}