<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformation extends \ArrayObject
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
     * @var TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformationcontact
     */
    protected $contact;
    /**
    * Required.
    
    Descriptive data for a physical location.  may be used as an actual physical address(place to which one could go), or a container of 'address parts' which should be handled as a unit(such as a city-state-zip combination within the US).
    
    Conditional when used with Payor object.  Required if entering using RECIPIENT or THIRD_PARTY.  Required if not-authenticated and SENDER is selected
    *
    * @var TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformationaddress
    */
    protected $address;
    /**
     * Indicate the contact details for this package.<br>Note: contact is shown in response only in secured flow. For non secured flow, contact is not shown in the response.'
     *
     * @return TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformationcontact
     */
    public function getContact(): TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformationcontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this package.<br>Note: contact is shown in response only in secured flow. For non secured flow, contact is not shown in the response.'
     *
     * @param TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformationcontact $contact
     *
     * @return self
     */
    public function setContact(TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformationcontact $contact): self
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
    * @return TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformationaddress
    */
    public function getAddress(): TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformationaddress
    {
        return $this->address;
    }
    /**
    * Required.
    
    Descriptive data for a physical location.  may be used as an actual physical address(place to which one could go), or a container of 'address parts' which should be handled as a unit(such as a city-state-zip combination within the US).
    
    Conditional when used with Payor object.  Required if entering using RECIPIENT or THIRD_PARTY.  Required if not-authenticated and SENDER is selected
    *
    * @param TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformationaddress $address
    *
    * @return self
    */
    public function setAddress(TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformationaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}