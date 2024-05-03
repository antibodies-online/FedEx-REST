<?php

namespace AntibodiesOnline\FedEx\Model;

class AddressV1AddressesResolvePostResponse403 extends \ArrayObject
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
     * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files, directories and user accounts. This includes code, message and parameters.
     *
     * @var list<AddressV1AddressesResolvePostResponse403ErrorsItem>
     */
    protected $errors;
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
     * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files, directories and user accounts. This includes code, message and parameters.
     *
     * @return list<AddressV1AddressesResolvePostResponse403ErrorsItem>
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files, directories and user accounts. This includes code, message and parameters.
     *
     * @param list<AddressV1AddressesResolvePostResponse403ErrorsItem> $errors
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