<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRating extends \ArrayObject
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
     * This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.<br>Example: PAYOR_LIST_SHIPMENT
     *
     * @var string
     */
    protected $actualRateType;
    /**
     * Each element of this field provides shipment-level rate totals for a specific rate type.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem>
     */
    protected $shipmentRateDetails;
    /**
     * This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.<br>Example: PAYOR_LIST_SHIPMENT
     *
     * @return string
     */
    public function getActualRateType() : string
    {
        return $this->actualRateType;
    }
    /**
     * This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.<br>Example: PAYOR_LIST_SHIPMENT
     *
     * @param string $actualRateType
     *
     * @return self
     */
    public function setActualRateType(string $actualRateType) : self
    {
        $this->initialized['actualRateType'] = true;
        $this->actualRateType = $actualRateType;
        return $this;
    }
    /**
     * Each element of this field provides shipment-level rate totals for a specific rate type.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem>
     */
    public function getShipmentRateDetails() : array
    {
        return $this->shipmentRateDetails;
    }
    /**
     * Each element of this field provides shipment-level rate totals for a specific rate type.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem> $shipmentRateDetails
     *
     * @return self
     */
    public function setShipmentRateDetails(array $shipmentRateDetails) : self
    {
        $this->initialized['shipmentRateDetails'] = true;
        $this->shipmentRateDetails = $shipmentRateDetails;
        return $this;
    }
}