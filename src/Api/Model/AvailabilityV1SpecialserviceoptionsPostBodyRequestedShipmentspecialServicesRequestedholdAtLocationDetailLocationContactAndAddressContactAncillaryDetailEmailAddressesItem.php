<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetailEmailAddressesItem extends \ArrayObject
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
     * These are email notification format type.
     *
     * @var string
     */
    protected $emailNotificationFormatType;
    /**
     * This is the email address.
     *
     * @var string
     */
    protected $address;
    /**
     * Indicate the Email Permission Type.
     *
     * @var array<string, string>
     */
    protected $permissions;
    /**
     * These are email notification format type.
     *
     * @return string
     */
    public function getEmailNotificationFormatType() : string
    {
        return $this->emailNotificationFormatType;
    }
    /**
     * These are email notification format type.
     *
     * @param string $emailNotificationFormatType
     *
     * @return self
     */
    public function setEmailNotificationFormatType(string $emailNotificationFormatType) : self
    {
        $this->initialized['emailNotificationFormatType'] = true;
        $this->emailNotificationFormatType = $emailNotificationFormatType;
        return $this;
    }
    /**
     * This is the email address.
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * This is the email address.
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the Email Permission Type.
     *
     * @return array<string, string>
     */
    public function getPermissions() : iterable
    {
        return $this->permissions;
    }
    /**
     * Indicate the Email Permission Type.
     *
     * @param array<string, string> $permissions
     *
     * @return self
     */
    public function setPermissions(iterable $permissions) : self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
}