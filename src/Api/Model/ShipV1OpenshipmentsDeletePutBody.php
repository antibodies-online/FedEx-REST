<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsDeletePutBody extends \ArrayObject
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
     * This is a unique value for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provide).<br>Example: Test1234
     *
     * @var string
     */
    protected $index;
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @var ShipV1OpenshipmentsDeletePutBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * This is a unique value for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provide).<br>Example: Test1234
     *
     * @return string
     */
    public function getIndex() : string
    {
        return $this->index;
    }
    /**
     * This is a unique value for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provide).<br>Example: Test1234
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
     * @return ShipV1OpenshipmentsDeletePutBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsDeletePutBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @param ShipV1OpenshipmentsDeletePutBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsDeletePutBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}