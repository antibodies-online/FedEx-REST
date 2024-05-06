<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPutBody extends \ArrayObject
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
     * Contains the data for the package that is to be modified in the open shipment.
     *
     * @var ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItem
     */
    protected $requestedPackageLineItem;
    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * @var string
     */
    protected $index;
    /**
     * Allowed values are STRONG_VALIDATION
     *
     * @var string
     */
    protected $shipAction;
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @var ShipV1OpenshipmentsPackagesPutBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * Indicates the tracking details for the package.
     *
     * @var ShipV1OpenshipmentsPackagesPutBodyTrackingId
     */
    protected $trackingId;
    /**
     * Contains the data for the package that is to be modified in the open shipment.
     *
     * @return ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItem
     */
    public function getRequestedPackageLineItem() : ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItem
    {
        return $this->requestedPackageLineItem;
    }
    /**
     * Contains the data for the package that is to be modified in the open shipment.
     *
     * @param ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItem $requestedPackageLineItem
     *
     * @return self
     */
    public function setRequestedPackageLineItem(ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItem $requestedPackageLineItem) : self
    {
        $this->initialized['requestedPackageLineItem'] = true;
        $this->requestedPackageLineItem = $requestedPackageLineItem;
        return $this;
    }
    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * @return string
     */
    public function getIndex() : string
    {
        return $this->index;
    }
    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * @param string $index
     *
     * @return self
     */
    public function setIndex(string $index) : self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * Allowed values are STRONG_VALIDATION
     *
     * @return string
     */
    public function getShipAction() : string
    {
        return $this->shipAction;
    }
    /**
     * Allowed values are STRONG_VALIDATION
     *
     * @param string $shipAction
     *
     * @return self
     */
    public function setShipAction(string $shipAction) : self
    {
        $this->initialized['shipAction'] = true;
        $this->shipAction = $shipAction;
        return $this;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @return ShipV1OpenshipmentsPackagesPutBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsPackagesPutBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @param ShipV1OpenshipmentsPackagesPutBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsPackagesPutBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Indicates the tracking details for the package.
     *
     * @return ShipV1OpenshipmentsPackagesPutBodyTrackingId
     */
    public function getTrackingId() : ShipV1OpenshipmentsPackagesPutBodyTrackingId
    {
        return $this->trackingId;
    }
    /**
     * Indicates the tracking details for the package.
     *
     * @param ShipV1OpenshipmentsPackagesPutBodyTrackingId $trackingId
     *
     * @return self
     */
    public function setTrackingId(ShipV1OpenshipmentsPackagesPutBodyTrackingId $trackingId) : self
    {
        $this->initialized['trackingId'] = true;
        $this->trackingId = $trackingId;
        return $this;
    }
}