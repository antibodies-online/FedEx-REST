<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyAccountNumber extends \ArrayObject
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
     * The account number value. Maximum length is 9 .<br>Example: Your account number
     *
     * @var string
     */
    protected $value;
    /**
     * The account number value. Maximum length is 9 .<br>Example: Your account number
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The account number value. Maximum length is 9 .<br>Example: Your account number
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}