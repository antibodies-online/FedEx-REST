<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem extends \ArrayObject
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
     * Tracking Information corresponding to a line item such as Tracking number,TrackingQualifier,TrackingCarrier and Tracking number uniqueId.
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber
     */
    protected $trackingNumber;
    /**
     * Specify the type of service.<br>Example: FEDEX_FREIGHT_ECONOMY, FEDEX_FREIGHT_PRIORITY
     *
     * @var string
     */
    protected $service;
    /**
     * Specify the sequence number of the package.<br>Example: 1
     *
     * @var float
     */
    protected $sequenceNumber;
    /**
     * Specify the total handling units.<br>Example: 2
     *
     * @var float
     */
    protected $totalHandlingUnits;
    /**
     * Specify the boolean value if one or more.
     *
     * @var bool
     */
    protected $justOneMore;
    /**
     * Specify the description.<br> Example: "data"
     *
     * @var string
     */
    protected $description;
    /**
     * Specify the packaging being used.
     *
     * @var string
     */
    protected $packaging;
    /**
     * Specifies the number.<br>Example: 4
     *
     * @var float
     */
    protected $pieces;
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemWeight
     */
    protected $weight;
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDimensions
     */
    protected $dimensions;
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDestination
     */
    protected $destination;
    /**
     * Specifies the shipment special services requested.
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequested
     */
    protected $shipmentSpecialServicesRequested;
    /**
     * Tracking Information corresponding to a line item such as Tracking number,TrackingQualifier,TrackingCarrier and Tracking number uniqueId.
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber
     */
    public function getTrackingNumber() : PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber
    {
        return $this->trackingNumber;
    }
    /**
     * Tracking Information corresponding to a line item such as Tracking number,TrackingQualifier,TrackingCarrier and Tracking number uniqueId.
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Specify the type of service.<br>Example: FEDEX_FREIGHT_ECONOMY, FEDEX_FREIGHT_PRIORITY
     *
     * @return string
     */
    public function getService() : string
    {
        return $this->service;
    }
    /**
     * Specify the type of service.<br>Example: FEDEX_FREIGHT_ECONOMY, FEDEX_FREIGHT_PRIORITY
     *
     * @param string $service
     *
     * @return self
     */
    public function setService(string $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Specify the sequence number of the package.<br>Example: 1
     *
     * @return float
     */
    public function getSequenceNumber() : float
    {
        return $this->sequenceNumber;
    }
    /**
     * Specify the sequence number of the package.<br>Example: 1
     *
     * @param float $sequenceNumber
     *
     * @return self
     */
    public function setSequenceNumber(float $sequenceNumber) : self
    {
        $this->initialized['sequenceNumber'] = true;
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Specify the total handling units.<br>Example: 2
     *
     * @return float
     */
    public function getTotalHandlingUnits() : float
    {
        return $this->totalHandlingUnits;
    }
    /**
     * Specify the total handling units.<br>Example: 2
     *
     * @param float $totalHandlingUnits
     *
     * @return self
     */
    public function setTotalHandlingUnits(float $totalHandlingUnits) : self
    {
        $this->initialized['totalHandlingUnits'] = true;
        $this->totalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    /**
     * Specify the boolean value if one or more.
     *
     * @return bool
     */
    public function getJustOneMore() : bool
    {
        return $this->justOneMore;
    }
    /**
     * Specify the boolean value if one or more.
     *
     * @param bool $justOneMore
     *
     * @return self
     */
    public function setJustOneMore(bool $justOneMore) : self
    {
        $this->initialized['justOneMore'] = true;
        $this->justOneMore = $justOneMore;
        return $this;
    }
    /**
     * Specify the description.<br> Example: "data"
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Specify the description.<br> Example: "data"
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
     * Specify the packaging being used.
     *
     * @return string
     */
    public function getPackaging() : string
    {
        return $this->packaging;
    }
    /**
     * Specify the packaging being used.
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
     * Specifies the number.<br>Example: 4
     *
     * @return float
     */
    public function getPieces() : float
    {
        return $this->pieces;
    }
    /**
     * Specifies the number.<br>Example: 4
     *
     * @param float $pieces
     *
     * @return self
     */
    public function setPieces(float $pieces) : self
    {
        $this->initialized['pieces'] = true;
        $this->pieces = $pieces;
        return $this;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemWeight
     */
    public function getWeight() : PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemWeight
    {
        return $this->weight;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemWeight $weight
     *
     * @return self
     */
    public function setWeight(PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemWeight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDimensions
     */
    public function getDimensions() : PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDestination
     */
    public function getDestination() : PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDestination
    {
        return $this->destination;
    }
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDestination $destination
     *
     * @return self
     */
    public function setDestination(PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemDestination $destination) : self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
        return $this;
    }
    /**
     * Specifies the shipment special services requested.
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequested
     */
    public function getShipmentSpecialServicesRequested() : PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequested
    {
        return $this->shipmentSpecialServicesRequested;
    }
    /**
     * Specifies the shipment special services requested.
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequested $shipmentSpecialServicesRequested
     *
     * @return self
     */
    public function setShipmentSpecialServicesRequested(PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequested $shipmentSpecialServicesRequested) : self
    {
        $this->initialized['shipmentSpecialServicesRequested'] = true;
        $this->shipmentSpecialServicesRequested = $shipmentSpecialServicesRequested;
        return $this;
    }
}