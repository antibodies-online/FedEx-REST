<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailCompanyName extends \ArrayObject
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
     * This is division within a company.
     *
     * @var string
     */
    protected $division;
    /**
     * This is Company code.
     *
     * @var string
     */
    protected $companyCd;
    /**
     * This is company Name.
     *
     * @var string
     */
    protected $name;
    /**
     * This is department within a company
     *
     * @var string
     */
    protected $department;
    /**
     * This is Store identifier within a company.
     *
     * @var string
     */
    protected $storeId;
    /**
     * This is division within a company.
     *
     * @return string
     */
    public function getDivision(): string
    {
        return $this->division;
    }
    /**
     * This is division within a company.
     *
     * @param string $division
     *
     * @return self
     */
    public function setDivision(string $division): self
    {
        $this->initialized['division'] = true;
        $this->division = $division;
        return $this;
    }
    /**
     * This is Company code.
     *
     * @return string
     */
    public function getCompanyCd(): string
    {
        return $this->companyCd;
    }
    /**
     * This is Company code.
     *
     * @param string $companyCd
     *
     * @return self
     */
    public function setCompanyCd(string $companyCd): self
    {
        $this->initialized['companyCd'] = true;
        $this->companyCd = $companyCd;
        return $this;
    }
    /**
     * This is company Name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * This is company Name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * This is department within a company
     *
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }
    /**
     * This is department within a company
     *
     * @param string $department
     *
     * @return self
     */
    public function setDepartment(string $department): self
    {
        $this->initialized['department'] = true;
        $this->department = $department;
        return $this;
    }
    /**
     * This is Store identifier within a company.
     *
     * @return string
     */
    public function getStoreId(): string
    {
        return $this->storeId;
    }
    /**
     * This is Store identifier within a company.
     *
     * @param string $storeId
     *
     * @return self
     */
    public function setStoreId(string $storeId): self
    {
        $this->initialized['storeId'] = true;
        $this->storeId = $storeId;
        return $this;
    }
}