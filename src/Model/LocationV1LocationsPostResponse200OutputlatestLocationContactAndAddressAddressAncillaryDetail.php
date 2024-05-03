<?php

namespace AntibodiesOnline\FedEx\Model;

class LocationV1LocationsPostResponse200OutputlatestLocationContactAndAddressAddressAncillaryDetail extends \ArrayObject
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
     * This is the subdivision or community within a city for the given address.<br>Example: Forester subdivision
     *
     * @var string
     */
    protected $locationInCity;
    /**
     * This is the suite information for the given address.<br>Example: suite 201
     *
     * @var string
     */
    protected $suite;
    /**
     * Indicate the reason to override address verification.<br> Valid values:  <ul><li>CUSTOMER_PREFERENCE</li><li>CUSTOMER_PROVIDED_PROOF</li><li>MANUAL_VALIDATION</li></ul>
     *
     * @var string
     */
    protected $adderssVerificationOverrideReason;
    /**
     * Display name.<br> Example: John
     *
     * @var string
     */
    protected $displayName;
    /**
     * This is location in a campus, such as exterior building annex A.<br>Example: south west of main office entrance
     *
     * @var string
     */
    protected $locationInProperty;
    /**
     * Specify additional information about the given address.<br>Example: north door
     *
     * @var string
     */
    protected $addtionalDescriptions;
    /**
     * This is the department for the given address.<br>Example: Claims department
     *
     * @var string
     */
    protected $department;
    /**
     * This is to specify the room or floor information for the given address.<br>Example: 5th floor
     *
     * @var string
     */
    protected $roomFloor;
    /**
     * This is the cross street information for the given address.<br>Example: Union and Main
     *
     * @var string
     */
    protected $crossStreet;
    /**
     * This is the building information for the given address.<br>Example: Building 300
     *
     * @var string
     */
    protected $building;
    /**
     * This is the apartment information for the given address.<br>Example: Apartment 1503
     *
     * @var string
     */
    protected $apartment;
    /**
     * This is room specific information for the given address.<br>Example: Room B-23
     *
     * @var string
     */
    protected $room;
    /**
     * This is the subdivision or community within a city for the given address.<br>Example: Forester subdivision
     *
     * @return string
     */
    public function getLocationInCity() : string
    {
        return $this->locationInCity;
    }
    /**
     * This is the subdivision or community within a city for the given address.<br>Example: Forester subdivision
     *
     * @param string $locationInCity
     *
     * @return self
     */
    public function setLocationInCity(string $locationInCity) : self
    {
        $this->initialized['locationInCity'] = true;
        $this->locationInCity = $locationInCity;
        return $this;
    }
    /**
     * This is the suite information for the given address.<br>Example: suite 201
     *
     * @return string
     */
    public function getSuite() : string
    {
        return $this->suite;
    }
    /**
     * This is the suite information for the given address.<br>Example: suite 201
     *
     * @param string $suite
     *
     * @return self
     */
    public function setSuite(string $suite) : self
    {
        $this->initialized['suite'] = true;
        $this->suite = $suite;
        return $this;
    }
    /**
     * Indicate the reason to override address verification.<br> Valid values:  <ul><li>CUSTOMER_PREFERENCE</li><li>CUSTOMER_PROVIDED_PROOF</li><li>MANUAL_VALIDATION</li></ul>
     *
     * @return string
     */
    public function getAdderssVerificationOverrideReason() : string
    {
        return $this->adderssVerificationOverrideReason;
    }
    /**
     * Indicate the reason to override address verification.<br> Valid values:  <ul><li>CUSTOMER_PREFERENCE</li><li>CUSTOMER_PROVIDED_PROOF</li><li>MANUAL_VALIDATION</li></ul>
     *
     * @param string $adderssVerificationOverrideReason
     *
     * @return self
     */
    public function setAdderssVerificationOverrideReason(string $adderssVerificationOverrideReason) : self
    {
        $this->initialized['adderssVerificationOverrideReason'] = true;
        $this->adderssVerificationOverrideReason = $adderssVerificationOverrideReason;
        return $this;
    }
    /**
     * Display name.<br> Example: John
     *
     * @return string
     */
    public function getDisplayName() : string
    {
        return $this->displayName;
    }
    /**
     * Display name.<br> Example: John
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName) : self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * This is location in a campus, such as exterior building annex A.<br>Example: south west of main office entrance
     *
     * @return string
     */
    public function getLocationInProperty() : string
    {
        return $this->locationInProperty;
    }
    /**
     * This is location in a campus, such as exterior building annex A.<br>Example: south west of main office entrance
     *
     * @param string $locationInProperty
     *
     * @return self
     */
    public function setLocationInProperty(string $locationInProperty) : self
    {
        $this->initialized['locationInProperty'] = true;
        $this->locationInProperty = $locationInProperty;
        return $this;
    }
    /**
     * Specify additional information about the given address.<br>Example: north door
     *
     * @return string
     */
    public function getAddtionalDescriptions() : string
    {
        return $this->addtionalDescriptions;
    }
    /**
     * Specify additional information about the given address.<br>Example: north door
     *
     * @param string $addtionalDescriptions
     *
     * @return self
     */
    public function setAddtionalDescriptions(string $addtionalDescriptions) : self
    {
        $this->initialized['addtionalDescriptions'] = true;
        $this->addtionalDescriptions = $addtionalDescriptions;
        return $this;
    }
    /**
     * This is the department for the given address.<br>Example: Claims department
     *
     * @return string
     */
    public function getDepartment() : string
    {
        return $this->department;
    }
    /**
     * This is the department for the given address.<br>Example: Claims department
     *
     * @param string $department
     *
     * @return self
     */
    public function setDepartment(string $department) : self
    {
        $this->initialized['department'] = true;
        $this->department = $department;
        return $this;
    }
    /**
     * This is to specify the room or floor information for the given address.<br>Example: 5th floor
     *
     * @return string
     */
    public function getRoomFloor() : string
    {
        return $this->roomFloor;
    }
    /**
     * This is to specify the room or floor information for the given address.<br>Example: 5th floor
     *
     * @param string $roomFloor
     *
     * @return self
     */
    public function setRoomFloor(string $roomFloor) : self
    {
        $this->initialized['roomFloor'] = true;
        $this->roomFloor = $roomFloor;
        return $this;
    }
    /**
     * This is the cross street information for the given address.<br>Example: Union and Main
     *
     * @return string
     */
    public function getCrossStreet() : string
    {
        return $this->crossStreet;
    }
    /**
     * This is the cross street information for the given address.<br>Example: Union and Main
     *
     * @param string $crossStreet
     *
     * @return self
     */
    public function setCrossStreet(string $crossStreet) : self
    {
        $this->initialized['crossStreet'] = true;
        $this->crossStreet = $crossStreet;
        return $this;
    }
    /**
     * This is the building information for the given address.<br>Example: Building 300
     *
     * @return string
     */
    public function getBuilding() : string
    {
        return $this->building;
    }
    /**
     * This is the building information for the given address.<br>Example: Building 300
     *
     * @param string $building
     *
     * @return self
     */
    public function setBuilding(string $building) : self
    {
        $this->initialized['building'] = true;
        $this->building = $building;
        return $this;
    }
    /**
     * This is the apartment information for the given address.<br>Example: Apartment 1503
     *
     * @return string
     */
    public function getApartment() : string
    {
        return $this->apartment;
    }
    /**
     * This is the apartment information for the given address.<br>Example: Apartment 1503
     *
     * @param string $apartment
     *
     * @return self
     */
    public function setApartment(string $apartment) : self
    {
        $this->initialized['apartment'] = true;
        $this->apartment = $apartment;
        return $this;
    }
    /**
     * This is room specific information for the given address.<br>Example: Room B-23
     *
     * @return string
     */
    public function getRoom() : string
    {
        return $this->room;
    }
    /**
     * This is room specific information for the given address.<br>Example: Room B-23
     *
     * @param string $room
     *
     * @return self
     */
    public function setRoom(string $room) : self
    {
        $this->initialized['room'] = true;
        $this->room = $room;
        return $this;
    }
}