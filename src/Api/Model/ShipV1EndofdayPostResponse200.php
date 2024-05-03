<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1EndofdayPostResponse200 extends \ArrayObject
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
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     * @var string
     */
    protected $transactionId;
    /**
     * 
     *
     * @var ShipV1EndofdayPostResponse200Output
     */
    protected $output;
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     * @return string
     */
    public function getTransactionId() : string
    {
        return $this->transactionId;
    }
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(string $transactionId) : self
    {
        $this->initialized['transactionId'] = true;
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * 
     *
     * @return ShipV1EndofdayPostResponse200Output
     */
    public function getOutput() : ShipV1EndofdayPostResponse200Output
    {
        return $this->output;
    }
    /**
     * 
     *
     * @param ShipV1EndofdayPostResponse200Output $output
     *
     * @return self
     */
    public function setOutput(ShipV1EndofdayPostResponse200Output $output) : self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}