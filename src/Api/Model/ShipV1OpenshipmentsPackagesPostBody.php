<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPostBody extends \ArrayObject
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
     * There are Ship actions as part of processing the shipment.
     *
     * @var string
     */
    protected $shipAction;
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @var ShipV1OpenshipmentsPackagesPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * These are package line item details in the shipment. 
     *
     * @var list<ShipV1OpenshipmentsPackagesPostBodyRequestedPackageLineItemsItem>
     */
    protected $requestedPackageLineItems;
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
     * There are Ship actions as part of processing the shipment.
     *
     * @return string
     */
    public function getShipAction() : string
    {
        return $this->shipAction;
    }
    /**
     * There are Ship actions as part of processing the shipment.
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
     * @return ShipV1OpenshipmentsPackagesPostBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsPackagesPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @param ShipV1OpenshipmentsPackagesPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsPackagesPostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * These are package line item details in the shipment. 
     *
     * @return list<ShipV1OpenshipmentsPackagesPostBodyRequestedPackageLineItemsItem>
     */
    public function getRequestedPackageLineItems() : array
    {
        return $this->requestedPackageLineItems;
    }
    /**
     * These are package line item details in the shipment. 
     *
     * @param list<ShipV1OpenshipmentsPackagesPostBodyRequestedPackageLineItemsItem> $requestedPackageLineItems
     *
     * @return self
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems) : self
    {
        $this->initialized['requestedPackageLineItems'] = true;
        $this->requestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
}