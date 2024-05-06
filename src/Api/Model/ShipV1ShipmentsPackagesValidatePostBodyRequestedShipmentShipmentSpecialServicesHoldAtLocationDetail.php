<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail extends \ArrayObject
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
     * This is an alphanumeric identifier used for Location/Facility Identification.<br>Example: YBZA<br>Note: <ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul>
     *
     * @var string
     */
    protected $locationId;
    /**
     * Specifies the contact and address details of a location.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddress
     */
    protected $locationContactAndAddress;
    /**
     * Specifies the type of facility at which package/shipment is to be held.
     *
     * @var string
     */
    protected $locationType;
    /**
     * This is an alphanumeric identifier used for Location/Facility Identification.<br>Example: YBZA<br>Note: <ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul>
     *
     * @return string
     */
    public function getLocationId() : string
    {
        return $this->locationId;
    }
    /**
     * This is an alphanumeric identifier used for Location/Facility Identification.<br>Example: YBZA<br>Note: <ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul>
     *
     * @param string $locationId
     *
     * @return self
     */
    public function setLocationId(string $locationId) : self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
    /**
     * Specifies the contact and address details of a location.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddress
     */
    public function getLocationContactAndAddress() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddress
    {
        return $this->locationContactAndAddress;
    }
    /**
     * Specifies the contact and address details of a location.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddress $locationContactAndAddress
     *
     * @return self
     */
    public function setLocationContactAndAddress(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddress $locationContactAndAddress) : self
    {
        $this->initialized['locationContactAndAddress'] = true;
        $this->locationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    /**
     * Specifies the type of facility at which package/shipment is to be held.
     *
     * @return string
     */
    public function getLocationType() : string
    {
        return $this->locationType;
    }
    /**
     * Specifies the type of facility at which package/shipment is to be held.
     *
     * @param string $locationType
     *
     * @return self
     */
    public function setLocationType(string $locationType) : self
    {
        $this->initialized['locationType'] = true;
        $this->locationType = $locationType;
        return $this;
    }
}