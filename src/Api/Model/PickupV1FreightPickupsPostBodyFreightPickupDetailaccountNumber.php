<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetailaccountNumber extends \ArrayObject
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
     * Specify value of the account number. Maximum length is 9.<br> Example: 123456789
     *
     * @var string
     */
    protected $value;
    /**
     * The account key associated with this account number.
     *
     * @var string
     */
    protected $key;
    /**
     * Specify value of the account number. Maximum length is 9.<br> Example: 123456789
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Specify value of the account number. Maximum length is 9.<br> Example: 123456789
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The account key associated with this account number.
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * The account key associated with this account number.
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
}