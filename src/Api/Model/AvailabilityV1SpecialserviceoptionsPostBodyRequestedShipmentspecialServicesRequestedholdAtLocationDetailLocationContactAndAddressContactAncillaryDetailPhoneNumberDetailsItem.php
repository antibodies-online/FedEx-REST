<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailPhoneNumberDetailsItem extends \ArrayObject
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
     * A phone number for a party. Numeric only
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailPhoneNumberDetailsItemNumber
     */
    protected $number;
    /**
     * This is to specify the phone permission.
     *
     * @var array<string, string>
     */
    protected $permissions;
    /**
     * Specify if the phone usage is Primary or Secondary.
     *
     * @var string
     */
    protected $usage;
    /**
     * Indicate the Phone Number Type.
     *
     * @var string
     */
    protected $type;
    /**
     * A phone number for a party. Numeric only
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailPhoneNumberDetailsItemNumber
     */
    public function getNumber(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailPhoneNumberDetailsItemNumber
    {
        return $this->number;
    }
    /**
     * A phone number for a party. Numeric only
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailPhoneNumberDetailsItemNumber $number
     *
     * @return self
     */
    public function setNumber(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailPhoneNumberDetailsItemNumber $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * This is to specify the phone permission.
     *
     * @return array<string, string>
     */
    public function getPermissions(): iterable
    {
        return $this->permissions;
    }
    /**
     * This is to specify the phone permission.
     *
     * @param array<string, string> $permissions
     *
     * @return self
     */
    public function setPermissions(iterable $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * Specify if the phone usage is Primary or Secondary.
     *
     * @return string
     */
    public function getUsage(): string
    {
        return $this->usage;
    }
    /**
     * Specify if the phone usage is Primary or Secondary.
     *
     * @param string $usage
     *
     * @return self
     */
    public function setUsage(string $usage): self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
    /**
     * Indicate the Phone Number Type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Indicate the Phone Number Type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}