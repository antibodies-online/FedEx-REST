<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesRetrievePostBody extends \ArrayObject
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
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * @var string
     */
    protected $index;
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * Indicates the tracking details for the package.
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostBodyTrackingId
     */
    protected $trackingId;
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
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsPackagesRetrievePostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsPackagesRetrievePostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Indicates the tracking details for the package.
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostBodyTrackingId
     */
    public function getTrackingId() : ShipV1OpenshipmentsPackagesRetrievePostBodyTrackingId
    {
        return $this->trackingId;
    }
    /**
     * Indicates the tracking details for the package.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostBodyTrackingId $trackingId
     *
     * @return self
     */
    public function setTrackingId(ShipV1OpenshipmentsPackagesRetrievePostBodyTrackingId $trackingId) : self
    {
        $this->initialized['trackingId'] = true;
        $this->trackingId = $trackingId;
        return $this;
    }
}