<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails extends \ArrayObject
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
     * Field which holds the name of the person who received the package, if applicable.<br> Example: Receiver
     *
     * @var string
     */
    protected $receivedByName;
    /**
     * Field which holds the destination service area code.<br> Example: EDDUNAVAILABLE
     *
     * @var string
     */
    protected $destinationServiceArea;
    /**
     * Field which holds the description corresponding to the destination service area.<br> Example: Appointment Required
     *
     * @var string
     */
    protected $destinationServiceAreaDescription;
    /**
     * Field which holds the FedEx location description for the package destination.<br> Example: Receptionist/Front Desk
     *
     * @var string
     */
    protected $locationDescription;
    /**
     * Address where the package was actually delivered. Contrast with destinationAddress, which is the location to which the package was intended to be delivered. Addresses may differ due to delivery to a behavior, hold at FedEx location, etc.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsActualDeliveryAddress
     */
    protected $actualDeliveryAddress;
    /**
     * This element indicates whether the package will be delivered today. The value 'True', indicates that today is package delivery.<br> Example: true
     *
     * @var bool
     */
    protected $deliveryToday;
    /**
     * Field which holds the FedEx location type code for the package destination. If  Location Type not available we will get empty value.
     *
     * @var string
     */
    protected $locationType;
    /**
     * Field which holds the name of the person who signed for the package, if applicable.<br> Example: Reciever
     *
     * @var string
     */
    protected $signedByName;
    /**
     * Field which identifies the method of office order delivery. 'Pickup' - the recipient will be picking up the office order from the FedEx Office Center. 'Shipment' - the office order will be delivered to the recipient as a FedEx shipment using the FedEx Service Type requested. 'Courier' - the office order will be delivered to the recipient by local courier. <br> Example: Courier
     *
     * @var string
     */
    protected $officeOrderDeliveryMethod;
    /**
     * Field which holds the number of delivery attempts made to deliver the package.<br> Example: 0
     *
     * @var string
     */
    protected $deliveryAttempts;
    /**
     * Specifies eligibility type for the different delivery option.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsDeliveryOptionEligibilityDetailsItem>
     */
    protected $deliveryOptionEligibilityDetails;
    /**
     * Field which holds the name of the person who received the package, if applicable.<br> Example: Receiver
     *
     * @return string
     */
    public function getReceivedByName(): string
    {
        return $this->receivedByName;
    }
    /**
     * Field which holds the name of the person who received the package, if applicable.<br> Example: Receiver
     *
     * @param string $receivedByName
     *
     * @return self
     */
    public function setReceivedByName(string $receivedByName): self
    {
        $this->initialized['receivedByName'] = true;
        $this->receivedByName = $receivedByName;
        return $this;
    }
    /**
     * Field which holds the destination service area code.<br> Example: EDDUNAVAILABLE
     *
     * @return string
     */
    public function getDestinationServiceArea(): string
    {
        return $this->destinationServiceArea;
    }
    /**
     * Field which holds the destination service area code.<br> Example: EDDUNAVAILABLE
     *
     * @param string $destinationServiceArea
     *
     * @return self
     */
    public function setDestinationServiceArea(string $destinationServiceArea): self
    {
        $this->initialized['destinationServiceArea'] = true;
        $this->destinationServiceArea = $destinationServiceArea;
        return $this;
    }
    /**
     * Field which holds the description corresponding to the destination service area.<br> Example: Appointment Required
     *
     * @return string
     */
    public function getDestinationServiceAreaDescription(): string
    {
        return $this->destinationServiceAreaDescription;
    }
    /**
     * Field which holds the description corresponding to the destination service area.<br> Example: Appointment Required
     *
     * @param string $destinationServiceAreaDescription
     *
     * @return self
     */
    public function setDestinationServiceAreaDescription(string $destinationServiceAreaDescription): self
    {
        $this->initialized['destinationServiceAreaDescription'] = true;
        $this->destinationServiceAreaDescription = $destinationServiceAreaDescription;
        return $this;
    }
    /**
     * Field which holds the FedEx location description for the package destination.<br> Example: Receptionist/Front Desk
     *
     * @return string
     */
    public function getLocationDescription(): string
    {
        return $this->locationDescription;
    }
    /**
     * Field which holds the FedEx location description for the package destination.<br> Example: Receptionist/Front Desk
     *
     * @param string $locationDescription
     *
     * @return self
     */
    public function setLocationDescription(string $locationDescription): self
    {
        $this->initialized['locationDescription'] = true;
        $this->locationDescription = $locationDescription;
        return $this;
    }
    /**
     * Address where the package was actually delivered. Contrast with destinationAddress, which is the location to which the package was intended to be delivered. Addresses may differ due to delivery to a behavior, hold at FedEx location, etc.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsActualDeliveryAddress
     */
    public function getActualDeliveryAddress(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsActualDeliveryAddress
    {
        return $this->actualDeliveryAddress;
    }
    /**
     * Address where the package was actually delivered. Contrast with destinationAddress, which is the location to which the package was intended to be delivered. Addresses may differ due to delivery to a behavior, hold at FedEx location, etc.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsActualDeliveryAddress $actualDeliveryAddress
     *
     * @return self
     */
    public function setActualDeliveryAddress(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsActualDeliveryAddress $actualDeliveryAddress): self
    {
        $this->initialized['actualDeliveryAddress'] = true;
        $this->actualDeliveryAddress = $actualDeliveryAddress;
        return $this;
    }
    /**
     * This element indicates whether the package will be delivered today. The value 'True', indicates that today is package delivery.<br> Example: true
     *
     * @return bool
     */
    public function getDeliveryToday(): bool
    {
        return $this->deliveryToday;
    }
    /**
     * This element indicates whether the package will be delivered today. The value 'True', indicates that today is package delivery.<br> Example: true
     *
     * @param bool $deliveryToday
     *
     * @return self
     */
    public function setDeliveryToday(bool $deliveryToday): self
    {
        $this->initialized['deliveryToday'] = true;
        $this->deliveryToday = $deliveryToday;
        return $this;
    }
    /**
     * Field which holds the FedEx location type code for the package destination. If  Location Type not available we will get empty value.
     *
     * @return string
     */
    public function getLocationType(): string
    {
        return $this->locationType;
    }
    /**
     * Field which holds the FedEx location type code for the package destination. If  Location Type not available we will get empty value.
     *
     * @param string $locationType
     *
     * @return self
     */
    public function setLocationType(string $locationType): self
    {
        $this->initialized['locationType'] = true;
        $this->locationType = $locationType;
        return $this;
    }
    /**
     * Field which holds the name of the person who signed for the package, if applicable.<br> Example: Reciever
     *
     * @return string
     */
    public function getSignedByName(): string
    {
        return $this->signedByName;
    }
    /**
     * Field which holds the name of the person who signed for the package, if applicable.<br> Example: Reciever
     *
     * @param string $signedByName
     *
     * @return self
     */
    public function setSignedByName(string $signedByName): self
    {
        $this->initialized['signedByName'] = true;
        $this->signedByName = $signedByName;
        return $this;
    }
    /**
     * Field which identifies the method of office order delivery. 'Pickup' - the recipient will be picking up the office order from the FedEx Office Center. 'Shipment' - the office order will be delivered to the recipient as a FedEx shipment using the FedEx Service Type requested. 'Courier' - the office order will be delivered to the recipient by local courier. <br> Example: Courier
     *
     * @return string
     */
    public function getOfficeOrderDeliveryMethod(): string
    {
        return $this->officeOrderDeliveryMethod;
    }
    /**
     * Field which identifies the method of office order delivery. 'Pickup' - the recipient will be picking up the office order from the FedEx Office Center. 'Shipment' - the office order will be delivered to the recipient as a FedEx shipment using the FedEx Service Type requested. 'Courier' - the office order will be delivered to the recipient by local courier. <br> Example: Courier
     *
     * @param string $officeOrderDeliveryMethod
     *
     * @return self
     */
    public function setOfficeOrderDeliveryMethod(string $officeOrderDeliveryMethod): self
    {
        $this->initialized['officeOrderDeliveryMethod'] = true;
        $this->officeOrderDeliveryMethod = $officeOrderDeliveryMethod;
        return $this;
    }
    /**
     * Field which holds the number of delivery attempts made to deliver the package.<br> Example: 0
     *
     * @return string
     */
    public function getDeliveryAttempts(): string
    {
        return $this->deliveryAttempts;
    }
    /**
     * Field which holds the number of delivery attempts made to deliver the package.<br> Example: 0
     *
     * @param string $deliveryAttempts
     *
     * @return self
     */
    public function setDeliveryAttempts(string $deliveryAttempts): self
    {
        $this->initialized['deliveryAttempts'] = true;
        $this->deliveryAttempts = $deliveryAttempts;
        return $this;
    }
    /**
     * Specifies eligibility type for the different delivery option.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsDeliveryOptionEligibilityDetailsItem>
     */
    public function getDeliveryOptionEligibilityDetails(): array
    {
        return $this->deliveryOptionEligibilityDetails;
    }
    /**
     * Specifies eligibility type for the different delivery option.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetailsDeliveryOptionEligibilityDetailsItem> $deliveryOptionEligibilityDetails
     *
     * @return self
     */
    public function setDeliveryOptionEligibilityDetails(array $deliveryOptionEligibilityDetails): self
    {
        $this->initialized['deliveryOptionEligibilityDetails'] = true;
        $this->deliveryOptionEligibilityDetails = $deliveryOptionEligibilityDetails;
        return $this;
    }
}