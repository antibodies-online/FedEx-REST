<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetail extends \ArrayObject
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
     * Indicates the type of the FedEx holding location <br>Example: FEDEX_STAFFED
     *
     * @var string
     */
    protected $holdingLocationType;
    /**
     * Indicate the physical address of the FedEx holding location.
     *
     * @var ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocation
     */
    protected $holdingLocation;
    /**
     * Indicates the type of the FedEx holding location <br>Example: FEDEX_STAFFED
     *
     * @return string
     */
    public function getHoldingLocationType() : string
    {
        return $this->holdingLocationType;
    }
    /**
     * Indicates the type of the FedEx holding location <br>Example: FEDEX_STAFFED
     *
     * @param string $holdingLocationType
     *
     * @return self
     */
    public function setHoldingLocationType(string $holdingLocationType) : self
    {
        $this->initialized['holdingLocationType'] = true;
        $this->holdingLocationType = $holdingLocationType;
        return $this;
    }
    /**
     * Indicate the physical address of the FedEx holding location.
     *
     * @return ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocation
     */
    public function getHoldingLocation() : ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocation
    {
        return $this->holdingLocation;
    }
    /**
     * Indicate the physical address of the FedEx holding location.
     *
     * @param ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocation $holdingLocation
     *
     * @return self
     */
    public function setHoldingLocation(ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocation $holdingLocation) : self
    {
        $this->initialized['holdingLocation'] = true;
        $this->holdingLocation = $holdingLocation;
        return $this;
    }
}