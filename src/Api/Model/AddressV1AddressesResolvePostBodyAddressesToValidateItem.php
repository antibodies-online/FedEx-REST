<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostBodyAddressesToValidateItem extends \ArrayObject
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
     * This is the Address in detail to be resolved.
     *
     * @var AddressV1AddressesResolvePostBodyAddressesToValidateItemAddress
     */
    protected $address;
    /**
     * Client Reference Id
     *
     * @var string
     */
    protected $clientReferenceId;
    /**
     * This is the Address in detail to be resolved.
     *
     * @return AddressV1AddressesResolvePostBodyAddressesToValidateItemAddress
     */
    public function getAddress() : AddressV1AddressesResolvePostBodyAddressesToValidateItemAddress
    {
        return $this->address;
    }
    /**
     * This is the Address in detail to be resolved.
     *
     * @param AddressV1AddressesResolvePostBodyAddressesToValidateItemAddress $address
     *
     * @return self
     */
    public function setAddress(AddressV1AddressesResolvePostBodyAddressesToValidateItemAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Client Reference Id
     *
     * @return string
     */
    public function getClientReferenceId() : string
    {
        return $this->clientReferenceId;
    }
    /**
     * Client Reference Id
     *
     * @param string $clientReferenceId
     *
     * @return self
     */
    public function setClientReferenceId(string $clientReferenceId) : self
    {
        $this->initialized['clientReferenceId'] = true;
        $this->clientReferenceId = $clientReferenceId;
        return $this;
    }
}