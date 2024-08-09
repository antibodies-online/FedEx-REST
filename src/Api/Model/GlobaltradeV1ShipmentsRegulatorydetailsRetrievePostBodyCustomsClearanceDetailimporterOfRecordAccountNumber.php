<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailimporterOfRecordAccountNumber extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * This is FedEx Account number details. Example: 123456789
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * This is FedEx Account number details. Example: 123456789
     *
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details. Example: 123456789
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}