<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddress extends \ArrayObject
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
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of \"address parts\" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @var LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressAddress
     */
    protected $address;
    /**
     * Indicates the contact details such as Name, Email, PhoneNumber
     *
     * @var LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressContact
     */
    protected $contact;
    /**
     * Indicate the additional address details for the physical location .
     *
     * @var LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressAddressAncillaryDetail
     */
    protected $addressAncillaryDetail;
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of \"address parts\" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressAddress
     */
    public function getAddress() : LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressAddress
    {
        return $this->address;
    }
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of \"address parts\" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressAddress $address
     *
     * @return self
     */
    public function setAddress(LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicates the contact details such as Name, Email, PhoneNumber
     *
     * @return LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressContact
     */
    public function getContact() : LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressContact
    {
        return $this->contact;
    }
    /**
     * Indicates the contact details such as Name, Email, PhoneNumber
     *
     * @param LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressContact $contact
     *
     * @return self
     */
    public function setContact(LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressContact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Indicate the additional address details for the physical location .
     *
     * @return LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressAddressAncillaryDetail
     */
    public function getAddressAncillaryDetail() : LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressAddressAncillaryDetail
    {
        return $this->addressAncillaryDetail;
    }
    /**
     * Indicate the additional address details for the physical location .
     *
     * @param LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressAddressAncillaryDetail $addressAncillaryDetail
     *
     * @return self
     */
    public function setAddressAncillaryDetail(LocationV1LocationsPostResponse200OutputnearestLocationContactAndAddressAddressAncillaryDetail $addressAncillaryDetail) : self
    {
        $this->initialized['addressAncillaryDetail'] = true;
        $this->addressAncillaryDetail = $addressAncillaryDetail;
        return $this;
    }
}