<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetail extends \ArrayObject
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
     * This is an alphanumeric identifier used for Location/Facility Identification.<br><br>Example: YBZA<br><br>Note: <i><ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul></i>
     *
     * @var string
     */
    protected $locationId;
    /**
     * Specify the contact and address details of a location.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddress
     */
    protected $locationContactAndAddress;
    /**
     * Specify the Location Type.<br> Example: FEDEX_ONSITE
     *
     * @var string
     */
    protected $locationType;
    /**
     * This is an alphanumeric identifier used for Location/Facility Identification.<br><br>Example: YBZA<br><br>Note: <i><ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul></i>
     *
     * @return string
     */
    public function getLocationId() : string
    {
        return $this->locationId;
    }
    /**
     * This is an alphanumeric identifier used for Location/Facility Identification.<br><br>Example: YBZA<br><br>Note: <i><ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul></i>
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
     * Specify the contact and address details of a location.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddress
     */
    public function getLocationContactAndAddress() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddress
    {
        return $this->locationContactAndAddress;
    }
    /**
     * Specify the contact and address details of a location.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddress $locationContactAndAddress
     *
     * @return self
     */
    public function setLocationContactAndAddress(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetailLocationContactAndAddress $locationContactAndAddress) : self
    {
        $this->initialized['locationContactAndAddress'] = true;
        $this->locationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    /**
     * Specify the Location Type.<br> Example: FEDEX_ONSITE
     *
     * @return string
     */
    public function getLocationType() : string
    {
        return $this->locationType;
    }
    /**
     * Specify the Location Type.<br> Example: FEDEX_ONSITE
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