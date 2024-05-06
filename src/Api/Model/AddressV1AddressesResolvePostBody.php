<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostBody extends \ArrayObject
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
     * This can be used to request the characteristics of an address had at a particular time in history. This defaults to current date time (of the Address Validation System). This is useful because the AddressValidation database is dynamic and stores historical data. Characteristics such as Business/Residential indicator may change over time.<br> Example: 2019-09-06
     *
     * @var string
     */
    protected $inEffectAsOfTimestamp;
    /**
     * Specify the parameters applied to validate the address.
     *
     * @var AddressV1AddressesResolvePostBodyValidateAddressControlParameters
     */
    protected $validateAddressControlParameters;
    /**
     * Indicate the address to be validated and resolved. This includes the address details, such as streetline, state or province code, country code and postal code. <br><br><i>Note: Up to 100 of these can be submitted in a single request.</i>
     *
     * @var list<AddressV1AddressesResolvePostBodyAddressesToValidateItem>
     */
    protected $addressesToValidate;
    /**
     * This can be used to request the characteristics of an address had at a particular time in history. This defaults to current date time (of the Address Validation System). This is useful because the AddressValidation database is dynamic and stores historical data. Characteristics such as Business/Residential indicator may change over time.<br> Example: 2019-09-06
     *
     * @return string
     */
    public function getInEffectAsOfTimestamp() : string
    {
        return $this->inEffectAsOfTimestamp;
    }
    /**
     * This can be used to request the characteristics of an address had at a particular time in history. This defaults to current date time (of the Address Validation System). This is useful because the AddressValidation database is dynamic and stores historical data. Characteristics such as Business/Residential indicator may change over time.<br> Example: 2019-09-06
     *
     * @param string $inEffectAsOfTimestamp
     *
     * @return self
     */
    public function setInEffectAsOfTimestamp(string $inEffectAsOfTimestamp) : self
    {
        $this->initialized['inEffectAsOfTimestamp'] = true;
        $this->inEffectAsOfTimestamp = $inEffectAsOfTimestamp;
        return $this;
    }
    /**
     * Specify the parameters applied to validate the address.
     *
     * @return AddressV1AddressesResolvePostBodyValidateAddressControlParameters
     */
    public function getValidateAddressControlParameters() : AddressV1AddressesResolvePostBodyValidateAddressControlParameters
    {
        return $this->validateAddressControlParameters;
    }
    /**
     * Specify the parameters applied to validate the address.
     *
     * @param AddressV1AddressesResolvePostBodyValidateAddressControlParameters $validateAddressControlParameters
     *
     * @return self
     */
    public function setValidateAddressControlParameters(AddressV1AddressesResolvePostBodyValidateAddressControlParameters $validateAddressControlParameters) : self
    {
        $this->initialized['validateAddressControlParameters'] = true;
        $this->validateAddressControlParameters = $validateAddressControlParameters;
        return $this;
    }
    /**
     * Indicate the address to be validated and resolved. This includes the address details, such as streetline, state or province code, country code and postal code. <br><br><i>Note: Up to 100 of these can be submitted in a single request.</i>
     *
     * @return list<AddressV1AddressesResolvePostBodyAddressesToValidateItem>
     */
    public function getAddressesToValidate() : array
    {
        return $this->addressesToValidate;
    }
    /**
     * Indicate the address to be validated and resolved. This includes the address details, such as streetline, state or province code, country code and postal code. <br><br><i>Note: Up to 100 of these can be submitted in a single request.</i>
     *
     * @param list<AddressV1AddressesResolvePostBodyAddressesToValidateItem> $addressesToValidate
     *
     * @return self
     */
    public function setAddressesToValidate(array $addressesToValidate) : self
    {
        $this->initialized['addressesToValidate'] = true;
        $this->addressesToValidate = $addressesToValidate;
        return $this;
    }
}