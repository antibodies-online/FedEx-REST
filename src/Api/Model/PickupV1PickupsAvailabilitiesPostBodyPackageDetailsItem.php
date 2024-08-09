<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItem extends \ArrayObject
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
     * Indicates the special services associated with this package.
     *
     * @var PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItemPackageSpecialServices
     */
    protected $packageSpecialServices;
    /**
     * Indicates the special services associated with this package.
     *
     * @return PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItemPackageSpecialServices
     */
    public function getPackageSpecialServices(): PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItemPackageSpecialServices
    {
        return $this->packageSpecialServices;
    }
    /**
     * Indicates the special services associated with this package.
     *
     * @param PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItemPackageSpecialServices $packageSpecialServices
     *
     * @return self
     */
    public function setPackageSpecialServices(PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItemPackageSpecialServices $packageSpecialServices): self
    {
        $this->initialized['packageSpecialServices'] = true;
        $this->packageSpecialServices = $packageSpecialServices;
        return $this;
    }
}