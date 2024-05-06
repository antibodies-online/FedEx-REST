<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsTagCancelShipmentidPutBody extends \ArrayObject
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
     * The specific FedEx customer account number (account value and account key) associated with the shipment.
     *
     * @var ShipV1ShipmentsTagCancelShipmentidPutBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * This is the FedEx service type associated with the shipment.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * The tracking number for the Express or Ground Tag to the cancelled.<br>Example: 301025281523<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see mock tracking numbers for FedEx Express and FedEx Ground.</a>
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * The details of the package for which shipping has been completed. The details include dispatch confirmation number, dispatch date, location, and the cxs alerts associated with the process.
     *
     * @var ShipV1ShipmentsTagCancelShipmentidPutBodyCompletedTagDetail
     */
    protected $completedTagDetail;
    /**
     * The specific FedEx customer account number (account value and account key) associated with the shipment.
     *
     * @return ShipV1ShipmentsTagCancelShipmentidPutBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1ShipmentsTagCancelShipmentidPutBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The specific FedEx customer account number (account value and account key) associated with the shipment.
     *
     * @param ShipV1ShipmentsTagCancelShipmentidPutBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsTagCancelShipmentidPutBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the FedEx service type associated with the shipment.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * This is the FedEx service type associated with the shipment.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType) : self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * The tracking number for the Express or Ground Tag to the cancelled.<br>Example: 301025281523<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see mock tracking numbers for FedEx Express and FedEx Ground.</a>
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * The tracking number for the Express or Ground Tag to the cancelled.<br>Example: 301025281523<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see mock tracking numbers for FedEx Express and FedEx Ground.</a>
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
    /**
     * The details of the package for which shipping has been completed. The details include dispatch confirmation number, dispatch date, location, and the cxs alerts associated with the process.
     *
     * @return ShipV1ShipmentsTagCancelShipmentidPutBodyCompletedTagDetail
     */
    public function getCompletedTagDetail() : ShipV1ShipmentsTagCancelShipmentidPutBodyCompletedTagDetail
    {
        return $this->completedTagDetail;
    }
    /**
     * The details of the package for which shipping has been completed. The details include dispatch confirmation number, dispatch date, location, and the cxs alerts associated with the process.
     *
     * @param ShipV1ShipmentsTagCancelShipmentidPutBodyCompletedTagDetail $completedTagDetail
     *
     * @return self
     */
    public function setCompletedTagDetail(ShipV1ShipmentsTagCancelShipmentidPutBodyCompletedTagDetail $completedTagDetail) : self
    {
        $this->initialized['completedTagDetail'] = true;
        $this->completedTagDetail = $completedTagDetail;
        return $this;
    }
}