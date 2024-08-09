<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddress extends \ArrayObject
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
     * @var TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddressContact
     */
    protected $contact;
    /**
    * Required.
    
    Descriptive data for a physical location.  may be used as an actual physical address(place to which one could go), or a container of 'address parts' which should be handled as a unit(such as a city-state-zip combination within the US).
    
    Conditional when used with Payor object.  Required if entering using RECIPIENT or THIRD_PARTY.  Required if not-authenticated and SENDER is selected
    *
    * @var TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddressAddress
    */
    protected $address;
    /**
     * Indicate the contact details for this package.<br>Note: contact is shown in response only in secured flow. For non secured flow, contact is not shown in the response.'
     *
     * @return TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddressContact
     */
    public function getContact(): TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddressContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this package.<br>Note: contact is shown in response only in secured flow. For non secured flow, contact is not shown in the response.'
     *
     * @param TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddressContact $contact
     *
     * @return self
     */
    public function setContact(TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddressContact $contact): self
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
    * @return TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddressAddress
    */
    public function getAddress(): TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddressAddress
    {
        return $this->address;
    }
    /**
    * Required.
    
    Descriptive data for a physical location.  may be used as an actual physical address(place to which one could go), or a container of 'address parts' which should be handled as a unit(such as a city-state-zip combination within the US).
    
    Conditional when used with Payor object.  Required if entering using RECIPIENT or THIRD_PARTY.  Required if not-authenticated and SENDER is selected
    *
    * @param TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddressAddress $address
    *
    * @return self
    */
    public function setAddress(TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddressAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}