<?php

namespace AntibodiesOnline\FedEx\Model;

class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemShipmentSpecialServicesListItem extends \ArrayObject
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
     * Specifies customer Integration Mode
     *
     * @var string
     */
    protected $customerIntegrationMode;
    /**
     * Specifies the astra label description
     *
     * @var string
     */
    protected $astraDescription;
    /**
     * 
     *
     * @var list<string>
     */
    protected $ltlPaymentTerms;
    /**
     * Specifies sub-type of the special service option
     *
     * @var string
     */
    protected $subType;
    /**
     * Specifies the value of the special service option.
     *
     * @var string
     */
    protected $value;
    /**
     * Specify special services requested for the package.<br>Example: BROKER_SELECT_OPTION<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment Level Special Service Types.</a>
     *
     * @var string
     */
    protected $specialServiceType;
    /**
     * Specifies customer Integration Mode
     *
     * @return string
     */
    public function getCustomerIntegrationMode() : string
    {
        return $this->customerIntegrationMode;
    }
    /**
     * Specifies customer Integration Mode
     *
     * @param string $customerIntegrationMode
     *
     * @return self
     */
    public function setCustomerIntegrationMode(string $customerIntegrationMode) : self
    {
        $this->initialized['customerIntegrationMode'] = true;
        $this->customerIntegrationMode = $customerIntegrationMode;
        return $this;
    }
    /**
     * Specifies the astra label description
     *
     * @return string
     */
    public function getAstraDescription() : string
    {
        return $this->astraDescription;
    }
    /**
     * Specifies the astra label description
     *
     * @param string $astraDescription
     *
     * @return self
     */
    public function setAstraDescription(string $astraDescription) : self
    {
        $this->initialized['astraDescription'] = true;
        $this->astraDescription = $astraDescription;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getLtlPaymentTerms() : array
    {
        return $this->ltlPaymentTerms;
    }
    /**
     * 
     *
     * @param list<string> $ltlPaymentTerms
     *
     * @return self
     */
    public function setLtlPaymentTerms(array $ltlPaymentTerms) : self
    {
        $this->initialized['ltlPaymentTerms'] = true;
        $this->ltlPaymentTerms = $ltlPaymentTerms;
        return $this;
    }
    /**
     * Specifies sub-type of the special service option
     *
     * @return string
     */
    public function getSubType() : string
    {
        return $this->subType;
    }
    /**
     * Specifies sub-type of the special service option
     *
     * @param string $subType
     *
     * @return self
     */
    public function setSubType(string $subType) : self
    {
        $this->initialized['subType'] = true;
        $this->subType = $subType;
        return $this;
    }
    /**
     * Specifies the value of the special service option.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Specifies the value of the special service option.
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
     * Specify special services requested for the package.<br>Example: BROKER_SELECT_OPTION<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment Level Special Service Types.</a>
     *
     * @return string
     */
    public function getSpecialServiceType() : string
    {
        return $this->specialServiceType;
    }
    /**
     * Specify special services requested for the package.<br>Example: BROKER_SELECT_OPTION<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment Level Special Service Types.</a>
     *
     * @param string $specialServiceType
     *
     * @return self
     */
    public function setSpecialServiceType(string $specialServiceType) : self
    {
        $this->initialized['specialServiceType'] = true;
        $this->specialServiceType = $specialServiceType;
        return $this;
    }
}