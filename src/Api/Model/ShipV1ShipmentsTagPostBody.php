<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsTagPostBody extends \ArrayObject
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
     * The shipment data describing the shipment being tendered to FedEx.
     *
     * @var mixed
     */
    protected $requestedShipment;
    /**
     * The specific FedEx customer account number (account value) associated with the shipment.
     *
     * @var ShipV1ShipmentsTagPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * The shipment data describing the shipment being tendered to FedEx.
     *
     * @return mixed
     */
    public function getRequestedShipment()
    {
        return $this->requestedShipment;
    }
    /**
     * The shipment data describing the shipment being tendered to FedEx.
     *
     * @param mixed $requestedShipment
     *
     * @return self
     */
    public function setRequestedShipment($requestedShipment) : self
    {
        $this->initialized['requestedShipment'] = true;
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * The specific FedEx customer account number (account value) associated with the shipment.
     *
     * @return ShipV1ShipmentsTagPostBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1ShipmentsTagPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The specific FedEx customer account number (account value) associated with the shipment.
     *
     * @param ShipV1ShipmentsTagPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsTagPostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}