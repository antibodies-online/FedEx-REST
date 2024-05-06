<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostBodyValidateAddressControlParameters extends \ArrayObject
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
     * Use this to request detailed information of the address components once the validation is complete. The details specify the changes made to each address component to resolve the address.
     *
     * @var bool
     */
    protected $includeResolutionTokens;
    /**
     * Use this to request detailed information of the address components once the validation is complete. The details specify the changes made to each address component to resolve the address.
     *
     * @return bool
     */
    public function getIncludeResolutionTokens() : bool
    {
        return $this->includeResolutionTokens;
    }
    /**
     * Use this to request detailed information of the address components once the validation is complete. The details specify the changes made to each address component to resolve the address.
     *
     * @param bool $includeResolutionTokens
     *
     * @return self
     */
    public function setIncludeResolutionTokens(bool $includeResolutionTokens) : self
    {
        $this->initialized['includeResolutionTokens'] = true;
        $this->includeResolutionTokens = $includeResolutionTokens;
        return $this;
    }
}