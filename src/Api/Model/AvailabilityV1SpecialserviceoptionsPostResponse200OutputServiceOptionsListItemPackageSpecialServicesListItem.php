<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemPackageSpecialServicesListItem extends \ArrayObject
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
     * Specifies customer integration mode.
     *
     * @var string
     */
    protected $customerIntegrationMode;
    /**
     * Specifies sub-type of the special service option.
     *
     * @var string
     */
    protected $subType;
    /**
     * Indicate the types of special services requested for the shipment.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     * @var string
     */
    protected $specialServiceType;
    /**
     * Specifies customer integration mode.
     *
     * @return string
     */
    public function getCustomerIntegrationMode(): string
    {
        return $this->customerIntegrationMode;
    }
    /**
     * Specifies customer integration mode.
     *
     * @param string $customerIntegrationMode
     *
     * @return self
     */
    public function setCustomerIntegrationMode(string $customerIntegrationMode): self
    {
        $this->initialized['customerIntegrationMode'] = true;
        $this->customerIntegrationMode = $customerIntegrationMode;
        return $this;
    }
    /**
     * Specifies sub-type of the special service option.
     *
     * @return string
     */
    public function getSubType(): string
    {
        return $this->subType;
    }
    /**
     * Specifies sub-type of the special service option.
     *
     * @param string $subType
     *
     * @return self
     */
    public function setSubType(string $subType): self
    {
        $this->initialized['subType'] = true;
        $this->subType = $subType;
        return $this;
    }
    /**
     * Indicate the types of special services requested for the shipment.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     * @return string
     */
    public function getSpecialServiceType(): string
    {
        return $this->specialServiceType;
    }
    /**
     * Indicate the types of special services requested for the shipment.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     * @param string $specialServiceType
     *
     * @return self
     */
    public function setSpecialServiceType(string $specialServiceType): self
    {
        $this->initialized['specialServiceType'] = true;
        $this->specialServiceType = $specialServiceType;
        return $this;
    }
}