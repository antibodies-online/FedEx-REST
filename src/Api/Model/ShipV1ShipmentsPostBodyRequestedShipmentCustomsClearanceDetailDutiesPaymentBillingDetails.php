<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails extends \ArrayObject
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
     * Indicates a billing code.
     *
     * @var string
     */
    protected $billingCode;
    /**
     * These are duties and taxes billing type.
     *
     * @var string
     */
    protected $billingType;
    /**
     * This is bill to alias identifier.
     *
     * @var string
     */
    protected $aliasId;
    /**
     * This is account nick name.
     *
     * @var string
     */
    protected $accountNickname;
    /**
     * This is bill to account number.
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * This is the country code of the account number.<br>Example: CA
     *
     * @var string
     */
    protected $accountNumberCountryCode;
    /**
     * Indicates a billing code.
     *
     * @return string
     */
    public function getBillingCode() : string
    {
        return $this->billingCode;
    }
    /**
     * Indicates a billing code.
     *
     * @param string $billingCode
     *
     * @return self
     */
    public function setBillingCode(string $billingCode) : self
    {
        $this->initialized['billingCode'] = true;
        $this->billingCode = $billingCode;
        return $this;
    }
    /**
     * These are duties and taxes billing type.
     *
     * @return string
     */
    public function getBillingType() : string
    {
        return $this->billingType;
    }
    /**
     * These are duties and taxes billing type.
     *
     * @param string $billingType
     *
     * @return self
     */
    public function setBillingType(string $billingType) : self
    {
        $this->initialized['billingType'] = true;
        $this->billingType = $billingType;
        return $this;
    }
    /**
     * This is bill to alias identifier.
     *
     * @return string
     */
    public function getAliasId() : string
    {
        return $this->aliasId;
    }
    /**
     * This is bill to alias identifier.
     *
     * @param string $aliasId
     *
     * @return self
     */
    public function setAliasId(string $aliasId) : self
    {
        $this->initialized['aliasId'] = true;
        $this->aliasId = $aliasId;
        return $this;
    }
    /**
     * This is account nick name.
     *
     * @return string
     */
    public function getAccountNickname() : string
    {
        return $this->accountNickname;
    }
    /**
     * This is account nick name.
     *
     * @param string $accountNickname
     *
     * @return self
     */
    public function setAccountNickname(string $accountNickname) : self
    {
        $this->initialized['accountNickname'] = true;
        $this->accountNickname = $accountNickname;
        return $this;
    }
    /**
     * This is bill to account number.
     *
     * @return string
     */
    public function getAccountNumber() : string
    {
        return $this->accountNumber;
    }
    /**
     * This is bill to account number.
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the country code of the account number.<br>Example: CA
     *
     * @return string
     */
    public function getAccountNumberCountryCode() : string
    {
        return $this->accountNumberCountryCode;
    }
    /**
     * This is the country code of the account number.<br>Example: CA
     *
     * @param string $accountNumberCountryCode
     *
     * @return self
     */
    public function setAccountNumberCountryCode(string $accountNumberCountryCode) : self
    {
        $this->initialized['accountNumberCountryCode'] = true;
        $this->accountNumberCountryCode = $accountNumberCountryCode;
        return $this;
    }
}