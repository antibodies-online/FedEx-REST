<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformation extends \ArrayObject
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
     * Indicate the contact details for this package.<br>Note: contact is shown in response only in secured flow. For non secured flow, contact is not shown in the response.'
     *
     * @var TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformationcontact
     */
    protected $contact;
    /**
    * Required.
    
    Descriptive data for a physical location.  may be used as an actual physical address(place to which one could go), or a container of 'address parts' which should be handled as a unit(such as a city-state-zip combination within the US).
    
    Conditional when used with Payor object.  Required if entering using RECIPIENT or THIRD_PARTY.  Required if not-authenticated and SENDER is selected
    *
    * @var TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformationaddress
    */
    protected $address;
    /**
     * Indicate the contact details for this package.<br>Note: contact is shown in response only in secured flow. For non secured flow, contact is not shown in the response.'
     *
     * @return TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformationcontact
     */
    public function getContact(): TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformationcontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this package.<br>Note: contact is shown in response only in secured flow. For non secured flow, contact is not shown in the response.'
     *
     * @param TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformationcontact $contact
     *
     * @return self
     */
    public function setContact(TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformationcontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
    * Required.
    
    Descriptive data for a physical location.  may be used as an actual physical address(place to which one could go), or a container of 'address parts' which should be handled as a unit(such as a city-state-zip combination within the US).
    
    Conditional when used with Payor object.  Required if entering using RECIPIENT or THIRD_PARTY.  Required if not-authenticated and SENDER is selected
    *
    * @return TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformationaddress
    */
    public function getAddress(): TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformationaddress
    {
        return $this->address;
    }
    /**
    * Required.
    
    Descriptive data for a physical location.  may be used as an actual physical address(place to which one could go), or a container of 'address parts' which should be handled as a unit(such as a city-state-zip combination within the US).
    
    Conditional when used with Payor object.  Required if entering using RECIPIENT or THIRD_PARTY.  Required if not-authenticated and SENDER is selected
    *
    * @param TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformationaddress $address
    *
    * @return self
    */
    public function setAddress(TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformationaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}