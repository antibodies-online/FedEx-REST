<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyAccountNumber extends \ArrayObject
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
     * This is the account number. Maximum Length is 9. <br>Example: XXX456XXX
     *
     * @var string
     */
    protected $value;
    /**
     * This is the account number. Maximum Length is 9. <br>Example: XXX456XXX
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * This is the account number. Maximum Length is 9. <br>Example: XXX456XXX
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