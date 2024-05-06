<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostBody extends \ArrayObject
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
     * @var ShipV1OpenshipmentsRetrievePostBodyAccountNumber
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
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @return ShipV1OpenshipmentsRetrievePostBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsRetrievePostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @param ShipV1OpenshipmentsRetrievePostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsRetrievePostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}