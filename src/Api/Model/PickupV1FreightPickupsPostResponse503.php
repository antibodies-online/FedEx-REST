<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostResponse503 extends \ArrayObject
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
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: a9053a7d-6865-42ab-b323-4632db263ab4
     *
     * @var string
     */
    protected $transactionId;
    /**
     * 
     *
     * @var list<PickupV1FreightPickupsPostResponse503ErrorsItem>
     */
    protected $errors;
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: a9053a7d-6865-42ab-b323-4632db263ab4
     *
     * @return string
     */
    public function getTransactionId() : string
    {
        return $this->transactionId;
    }
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: a9053a7d-6865-42ab-b323-4632db263ab4
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
     * @return list<PickupV1FreightPickupsPostResponse503ErrorsItem>
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param list<PickupV1FreightPickupsPostResponse503ErrorsItem> $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}