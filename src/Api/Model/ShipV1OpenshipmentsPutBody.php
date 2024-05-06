<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBody extends \ArrayObject
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
     * The detailed transaction data for the requested Open Shipment.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipment
     */
    protected $requestedShipment;
    /**
     * Indicates the optional actions that can be performed during the modification of packages in  Open Shipment.<p>Here are the values:<ul><li>CREATE_PACKAGE - Use CREATE_PACKAGE option to create Open Shipment.</li><li>STRONG_VALIDATION – Full shipment edits: any edit that fails will cause the transaction to fail. If the transaction is successful, a tracking number may be returned and the transaction will be saved to the database (committed).</li><li>WEAK_VALIDATION - Full shipment edits: any edit that fails will return errors but the transaction does not fail. The tracking number is returned and the transaction is saved in the database if the core edits are passed. Fix errors with the ModifyRequests transaction using the Index and returned tracking number.</li></ul></p>
     *
     * @var string
     */
    protected $openShipmentAction;
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @var ShipV1OpenshipmentsPutBodyAccountNumber
     */
    protected $accountNumber;
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
     * The detailed transaction data for the requested Open Shipment.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipment
     */
    public function getRequestedShipment() : ShipV1OpenshipmentsPutBodyRequestedShipment
    {
        return $this->requestedShipment;
    }
    /**
     * The detailed transaction data for the requested Open Shipment.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipment $requestedShipment
     *
     * @return self
     */
    public function setRequestedShipment(ShipV1OpenshipmentsPutBodyRequestedShipment $requestedShipment) : self
    {
        $this->initialized['requestedShipment'] = true;
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * Indicates the optional actions that can be performed during the modification of packages in  Open Shipment.<p>Here are the values:<ul><li>CREATE_PACKAGE - Use CREATE_PACKAGE option to create Open Shipment.</li><li>STRONG_VALIDATION – Full shipment edits: any edit that fails will cause the transaction to fail. If the transaction is successful, a tracking number may be returned and the transaction will be saved to the database (committed).</li><li>WEAK_VALIDATION - Full shipment edits: any edit that fails will return errors but the transaction does not fail. The tracking number is returned and the transaction is saved in the database if the core edits are passed. Fix errors with the ModifyRequests transaction using the Index and returned tracking number.</li></ul></p>
     *
     * @return string
     */
    public function getOpenShipmentAction() : string
    {
        return $this->openShipmentAction;
    }
    /**
     * Indicates the optional actions that can be performed during the modification of packages in  Open Shipment.<p>Here are the values:<ul><li>CREATE_PACKAGE - Use CREATE_PACKAGE option to create Open Shipment.</li><li>STRONG_VALIDATION – Full shipment edits: any edit that fails will cause the transaction to fail. If the transaction is successful, a tracking number may be returned and the transaction will be saved to the database (committed).</li><li>WEAK_VALIDATION - Full shipment edits: any edit that fails will return errors but the transaction does not fail. The tracking number is returned and the transaction is saved in the database if the core edits are passed. Fix errors with the ModifyRequests transaction using the Index and returned tracking number.</li></ul></p>
     *
     * @param string $openShipmentAction
     *
     * @return self
     */
    public function setOpenShipmentAction(string $openShipmentAction) : self
    {
        $this->initialized['openShipmentAction'] = true;
        $this->openShipmentAction = $openShipmentAction;
        return $this;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @return ShipV1OpenshipmentsPutBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsPutBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @param ShipV1OpenshipmentsPutBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsPutBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}