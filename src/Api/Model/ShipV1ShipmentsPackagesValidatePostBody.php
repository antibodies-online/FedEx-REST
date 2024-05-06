<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBody extends \ArrayObject
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
     * This is the detailed shipment request data to be validated before being submitted to FedEx.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipment
     */
    protected $requestedShipment;
    /**
     * The account number associated with the shipment.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * This is the detailed shipment request data to be validated before being submitted to FedEx.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipment
     */
    public function getRequestedShipment() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipment
    {
        return $this->requestedShipment;
    }
    /**
     * This is the detailed shipment request data to be validated before being submitted to FedEx.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipment $requestedShipment
     *
     * @return self
     */
    public function setRequestedShipment(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipment $requestedShipment) : self
    {
        $this->initialized['requestedShipment'] = true;
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * The account number associated with the shipment.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1ShipmentsPackagesValidatePostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsPackagesValidatePostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}