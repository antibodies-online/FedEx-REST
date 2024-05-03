<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail extends \ArrayObject
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
     * This is the ship date for the outbound shipment associated with a return shipment. The format is YYYY-MM-DD.<br> Example: 2019-10-01
     *
     * @var string
     */
    protected $shipDatestamp;
    /**
     * This is a tracking number associated with this package.<br>Example: 49XXX0000XXX20032835
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * This is the ship date for the outbound shipment associated with a return shipment. The format is YYYY-MM-DD.<br> Example: 2019-10-01
     *
     * @return string
     */
    public function getShipDatestamp() : string
    {
        return $this->shipDatestamp;
    }
    /**
     * This is the ship date for the outbound shipment associated with a return shipment. The format is YYYY-MM-DD.<br> Example: 2019-10-01
     *
     * @param string $shipDatestamp
     *
     * @return self
     */
    public function setShipDatestamp(string $shipDatestamp) : self
    {
        $this->initialized['shipDatestamp'] = true;
        $this->shipDatestamp = $shipDatestamp;
        return $this;
    }
    /**
     * This is a tracking number associated with this package.<br>Example: 49XXX0000XXX20032835
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * This is a tracking number associated with this package.<br>Example: 49XXX0000XXX20032835
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
}