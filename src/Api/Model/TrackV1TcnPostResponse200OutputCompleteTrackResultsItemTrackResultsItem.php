<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItem extends \ArrayObject
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
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemTrackingNumberInfo
     */
    protected $trackingNumberInfo;
    /**
     * Additional Tracking number information like nickname, notes, shipment attributes etc.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo
     */
    protected $additionalTrackingInfo;
    /**
     * Distance remaining to the destination. Only returned for FedEx Custom Critical shipments.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDistanceToDestination
     */
    protected $distanceToDestination;
    /**
     * Indicates the consolidation details.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem>
     */
    protected $consolidationDetail;
    /**
     * The associated meter number for your FedEx account number. Maximum of 9 characters. <br> Example: 8468376
     *
     * @var string
     */
    protected $meterNumber;
    /**
     * Specifies return information related to a return shipment.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetail
     */
    protected $returnDetail;
    /**
     * This object contains service description details for the package.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceDetail
     */
    protected $serviceDetail;
    /**
     * Location details for the recipient where the package will be or has been delivered.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocation
     */
    protected $destinationLocation;
    /**
     * Specifies details about the status of the track information for the shipment being tracked.  AncilliaryDetails may also be available which describe the cause of exception along with any action that needs to taken by customer.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail
     */
    protected $latestStatusDetail;
    /**
     * Commitment message for this package. Informative messages related to the package. Used to convey information such as FedEx has received information about a package but has not yet taken possession of it. FedEx has handed the package off to a third party for final delivery. The package delivery has been cancelled.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceCommitMessage
     */
    protected $serviceCommitMessage;
    /**
     * Notifications to the end user that provide additional information relevant to the tracked shipment. For example, a notification may indicate that a change in behavior has occurred.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemInformationNotesItem>
     */
    protected $informationNotes;
    /**
     * Contains error details.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemError
     */
    protected $error;
    /**
     * Indicate the special handlings on the package being tracked. Includes Special handlings requested for the package like signature options, Broker select or COD etc.<br><a onclick='loadDocReference("fedexexpressspecialhandlingcodes")'>Click here to see FedEx Express Special Handling Codes.</a>
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemSpecialHandlingsItem>
     */
    protected $specialHandlings;
    /**
     * The available tracking documents for the shipment being tracked. Available tracking documents includes SPOD and Bill of lading.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAvailableImagesItem>
     */
    protected $availableImages;
    /**
     * Delivery related information for the tracked package. Provides delivery details as actual delivery address once the package is delivered, the number of delivery attempts made etc.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails
     */
    protected $deliveryDetails;
    /**
     * FedEx scan event information for a shipment. Includes the list of events and/or scans applied.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem>
     */
    protected $scanEvents;
    /**
     * Date and time information for the tracked shipment. Date and time information for the tracked shipment includes various type of date time including when the package was shipped, when it is expected to deliver, when it is actually delivered etc.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDateAndTimesItem>
     */
    protected $dateAndTimes;
    /**
     * Details of the packages in the shipment being tracked. Includes details like package type, weight, dimensions, declared value, etc.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails
     */
    protected $packageDetails;
    /**
     * Classification codes for the goods in package. Goods classification codes required for clearance purpose. <br> Example: goodsClassificationCode
     *
     * @var string
     */
    protected $goodsClassificationCode;
    /**
     * Location details for the FedEx facility holding package for delivery. Populated only when REDIRECT_TO_HOLD_AT_LOCATION is available as custom delivery options.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemHoldAtLocation
     */
    protected $holdAtLocation;
    /**
     * List of delivery options that can be used to customize the delivery of the package.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItem>
     */
    protected $customDeliveryOptions;
    /**
     * The estimated window for time of delivery.  May be periodically updated based on available in-flight shipment information.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindow
     */
    protected $estimatedDeliveryTimeWindow;
    /**
     * Piece count information at origin and destination.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPieceCountsItem>
     */
    protected $pieceCounts;
    /**
     * Location details for the FedEx facility where the shipment originated.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation
     */
    protected $originLocation;
    /**
     * Contact and address information of recipient.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformation
     */
    protected $recipientInformation;
    /**
     * The standard committed window of time by which the package is expected to be delivered.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindow
     */
    protected $standardTransitTimeWindow;
    /**
     * Shipment level details for the shipment being tracked. Includes overall shipment weight, contents etc.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails
     */
    protected $shipmentDetails;
    /**
     * This object contains reason description and type.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReasonDetail
     */
    protected $reasonDetail;
    /**
     * The types of email notifications that are available for the package. <br> Example:ON_DELIVERY
     *
     * @var list<string>
     */
    protected $availableNotifications;
    /**
     * Contact and address information of shipper.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformation
     */
    protected $shipperInformation;
    /**
     * Last updated delivery address for the package.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLastUpdatedDestinationAddress
     */
    protected $lastUpdatedDestinationAddress;
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemTrackingNumberInfo
     */
    public function getTrackingNumberInfo(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemTrackingNumberInfo
    {
        return $this->trackingNumberInfo;
    }
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemTrackingNumberInfo $trackingNumberInfo
     *
     * @return self
     */
    public function setTrackingNumberInfo(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemTrackingNumberInfo $trackingNumberInfo): self
    {
        $this->initialized['trackingNumberInfo'] = true;
        $this->trackingNumberInfo = $trackingNumberInfo;
        return $this;
    }
    /**
     * Additional Tracking number information like nickname, notes, shipment attributes etc.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo
     */
    public function getAdditionalTrackingInfo(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo
    {
        return $this->additionalTrackingInfo;
    }
    /**
     * Additional Tracking number information like nickname, notes, shipment attributes etc.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo $additionalTrackingInfo
     *
     * @return self
     */
    public function setAdditionalTrackingInfo(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfo $additionalTrackingInfo): self
    {
        $this->initialized['additionalTrackingInfo'] = true;
        $this->additionalTrackingInfo = $additionalTrackingInfo;
        return $this;
    }
    /**
     * Distance remaining to the destination. Only returned for FedEx Custom Critical shipments.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDistanceToDestination
     */
    public function getDistanceToDestination(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDistanceToDestination
    {
        return $this->distanceToDestination;
    }
    /**
     * Distance remaining to the destination. Only returned for FedEx Custom Critical shipments.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDistanceToDestination $distanceToDestination
     *
     * @return self
     */
    public function setDistanceToDestination(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDistanceToDestination $distanceToDestination): self
    {
        $this->initialized['distanceToDestination'] = true;
        $this->distanceToDestination = $distanceToDestination;
        return $this;
    }
    /**
     * Indicates the consolidation details.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem>
     */
    public function getConsolidationDetail(): array
    {
        return $this->consolidationDetail;
    }
    /**
     * Indicates the consolidation details.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem> $consolidationDetail
     *
     * @return self
     */
    public function setConsolidationDetail(array $consolidationDetail): self
    {
        $this->initialized['consolidationDetail'] = true;
        $this->consolidationDetail = $consolidationDetail;
        return $this;
    }
    /**
     * The associated meter number for your FedEx account number. Maximum of 9 characters. <br> Example: 8468376
     *
     * @return string
     */
    public function getMeterNumber(): string
    {
        return $this->meterNumber;
    }
    /**
     * The associated meter number for your FedEx account number. Maximum of 9 characters. <br> Example: 8468376
     *
     * @param string $meterNumber
     *
     * @return self
     */
    public function setMeterNumber(string $meterNumber): self
    {
        $this->initialized['meterNumber'] = true;
        $this->meterNumber = $meterNumber;
        return $this;
    }
    /**
     * Specifies return information related to a return shipment.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetail
     */
    public function getReturnDetail(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetail
    {
        return $this->returnDetail;
    }
    /**
     * Specifies return information related to a return shipment.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetail $returnDetail
     *
     * @return self
     */
    public function setReturnDetail(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReturnDetail $returnDetail): self
    {
        $this->initialized['returnDetail'] = true;
        $this->returnDetail = $returnDetail;
        return $this;
    }
    /**
     * This object contains service description details for the package.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceDetail
     */
    public function getServiceDetail(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceDetail
    {
        return $this->serviceDetail;
    }
    /**
     * This object contains service description details for the package.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceDetail $serviceDetail
     *
     * @return self
     */
    public function setServiceDetail(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceDetail $serviceDetail): self
    {
        $this->initialized['serviceDetail'] = true;
        $this->serviceDetail = $serviceDetail;
        return $this;
    }
    /**
     * Location details for the recipient where the package will be or has been delivered.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocation
     */
    public function getDestinationLocation(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocation
    {
        return $this->destinationLocation;
    }
    /**
     * Location details for the recipient where the package will be or has been delivered.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocation $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocation $destinationLocation): self
    {
        $this->initialized['destinationLocation'] = true;
        $this->destinationLocation = $destinationLocation;
        return $this;
    }
    /**
     * Specifies details about the status of the track information for the shipment being tracked.  AncilliaryDetails may also be available which describe the cause of exception along with any action that needs to taken by customer.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail
     */
    public function getLatestStatusDetail(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail
    {
        return $this->latestStatusDetail;
    }
    /**
     * Specifies details about the status of the track information for the shipment being tracked.  AncilliaryDetails may also be available which describe the cause of exception along with any action that needs to taken by customer.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail $latestStatusDetail
     *
     * @return self
     */
    public function setLatestStatusDetail(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail $latestStatusDetail): self
    {
        $this->initialized['latestStatusDetail'] = true;
        $this->latestStatusDetail = $latestStatusDetail;
        return $this;
    }
    /**
     * Commitment message for this package. Informative messages related to the package. Used to convey information such as FedEx has received information about a package but has not yet taken possession of it. FedEx has handed the package off to a third party for final delivery. The package delivery has been cancelled.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceCommitMessage
     */
    public function getServiceCommitMessage(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceCommitMessage
    {
        return $this->serviceCommitMessage;
    }
    /**
     * Commitment message for this package. Informative messages related to the package. Used to convey information such as FedEx has received information about a package but has not yet taken possession of it. FedEx has handed the package off to a third party for final delivery. The package delivery has been cancelled.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceCommitMessage $serviceCommitMessage
     *
     * @return self
     */
    public function setServiceCommitMessage(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceCommitMessage $serviceCommitMessage): self
    {
        $this->initialized['serviceCommitMessage'] = true;
        $this->serviceCommitMessage = $serviceCommitMessage;
        return $this;
    }
    /**
     * Notifications to the end user that provide additional information relevant to the tracked shipment. For example, a notification may indicate that a change in behavior has occurred.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemInformationNotesItem>
     */
    public function getInformationNotes(): array
    {
        return $this->informationNotes;
    }
    /**
     * Notifications to the end user that provide additional information relevant to the tracked shipment. For example, a notification may indicate that a change in behavior has occurred.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemInformationNotesItem> $informationNotes
     *
     * @return self
     */
    public function setInformationNotes(array $informationNotes): self
    {
        $this->initialized['informationNotes'] = true;
        $this->informationNotes = $informationNotes;
        return $this;
    }
    /**
     * Contains error details.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemError
     */
    public function getError(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemError
    {
        return $this->error;
    }
    /**
     * Contains error details.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemError $error
     *
     * @return self
     */
    public function setError(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemError $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * Indicate the special handlings on the package being tracked. Includes Special handlings requested for the package like signature options, Broker select or COD etc.<br><a onclick='loadDocReference("fedexexpressspecialhandlingcodes")'>Click here to see FedEx Express Special Handling Codes.</a>
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemSpecialHandlingsItem>
     */
    public function getSpecialHandlings(): array
    {
        return $this->specialHandlings;
    }
    /**
     * Indicate the special handlings on the package being tracked. Includes Special handlings requested for the package like signature options, Broker select or COD etc.<br><a onclick='loadDocReference("fedexexpressspecialhandlingcodes")'>Click here to see FedEx Express Special Handling Codes.</a>
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemSpecialHandlingsItem> $specialHandlings
     *
     * @return self
     */
    public function setSpecialHandlings(array $specialHandlings): self
    {
        $this->initialized['specialHandlings'] = true;
        $this->specialHandlings = $specialHandlings;
        return $this;
    }
    /**
     * The available tracking documents for the shipment being tracked. Available tracking documents includes SPOD and Bill of lading.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAvailableImagesItem>
     */
    public function getAvailableImages(): array
    {
        return $this->availableImages;
    }
    /**
     * The available tracking documents for the shipment being tracked. Available tracking documents includes SPOD and Bill of lading.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAvailableImagesItem> $availableImages
     *
     * @return self
     */
    public function setAvailableImages(array $availableImages): self
    {
        $this->initialized['availableImages'] = true;
        $this->availableImages = $availableImages;
        return $this;
    }
    /**
     * Delivery related information for the tracked package. Provides delivery details as actual delivery address once the package is delivered, the number of delivery attempts made etc.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails
     */
    public function getDeliveryDetails(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails
    {
        return $this->deliveryDetails;
    }
    /**
     * Delivery related information for the tracked package. Provides delivery details as actual delivery address once the package is delivered, the number of delivery attempts made etc.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails $deliveryDetails
     *
     * @return self
     */
    public function setDeliveryDetails(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDeliveryDetails $deliveryDetails): self
    {
        $this->initialized['deliveryDetails'] = true;
        $this->deliveryDetails = $deliveryDetails;
        return $this;
    }
    /**
     * FedEx scan event information for a shipment. Includes the list of events and/or scans applied.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem>
     */
    public function getScanEvents(): array
    {
        return $this->scanEvents;
    }
    /**
     * FedEx scan event information for a shipment. Includes the list of events and/or scans applied.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem> $scanEvents
     *
     * @return self
     */
    public function setScanEvents(array $scanEvents): self
    {
        $this->initialized['scanEvents'] = true;
        $this->scanEvents = $scanEvents;
        return $this;
    }
    /**
     * Date and time information for the tracked shipment. Date and time information for the tracked shipment includes various type of date time including when the package was shipped, when it is expected to deliver, when it is actually delivered etc.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDateAndTimesItem>
     */
    public function getDateAndTimes(): array
    {
        return $this->dateAndTimes;
    }
    /**
     * Date and time information for the tracked shipment. Date and time information for the tracked shipment includes various type of date time including when the package was shipped, when it is expected to deliver, when it is actually delivered etc.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDateAndTimesItem> $dateAndTimes
     *
     * @return self
     */
    public function setDateAndTimes(array $dateAndTimes): self
    {
        $this->initialized['dateAndTimes'] = true;
        $this->dateAndTimes = $dateAndTimes;
        return $this;
    }
    /**
     * Details of the packages in the shipment being tracked. Includes details like package type, weight, dimensions, declared value, etc.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails
     */
    public function getPackageDetails(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails
    {
        return $this->packageDetails;
    }
    /**
     * Details of the packages in the shipment being tracked. Includes details like package type, weight, dimensions, declared value, etc.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails $packageDetails
     *
     * @return self
     */
    public function setPackageDetails(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails $packageDetails): self
    {
        $this->initialized['packageDetails'] = true;
        $this->packageDetails = $packageDetails;
        return $this;
    }
    /**
     * Classification codes for the goods in package. Goods classification codes required for clearance purpose. <br> Example: goodsClassificationCode
     *
     * @return string
     */
    public function getGoodsClassificationCode(): string
    {
        return $this->goodsClassificationCode;
    }
    /**
     * Classification codes for the goods in package. Goods classification codes required for clearance purpose. <br> Example: goodsClassificationCode
     *
     * @param string $goodsClassificationCode
     *
     * @return self
     */
    public function setGoodsClassificationCode(string $goodsClassificationCode): self
    {
        $this->initialized['goodsClassificationCode'] = true;
        $this->goodsClassificationCode = $goodsClassificationCode;
        return $this;
    }
    /**
     * Location details for the FedEx facility holding package for delivery. Populated only when REDIRECT_TO_HOLD_AT_LOCATION is available as custom delivery options.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemHoldAtLocation
     */
    public function getHoldAtLocation(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemHoldAtLocation
    {
        return $this->holdAtLocation;
    }
    /**
     * Location details for the FedEx facility holding package for delivery. Populated only when REDIRECT_TO_HOLD_AT_LOCATION is available as custom delivery options.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemHoldAtLocation $holdAtLocation
     *
     * @return self
     */
    public function setHoldAtLocation(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemHoldAtLocation $holdAtLocation): self
    {
        $this->initialized['holdAtLocation'] = true;
        $this->holdAtLocation = $holdAtLocation;
        return $this;
    }
    /**
     * List of delivery options that can be used to customize the delivery of the package.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItem>
     */
    public function getCustomDeliveryOptions(): array
    {
        return $this->customDeliveryOptions;
    }
    /**
     * List of delivery options that can be used to customize the delivery of the package.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItem> $customDeliveryOptions
     *
     * @return self
     */
    public function setCustomDeliveryOptions(array $customDeliveryOptions): self
    {
        $this->initialized['customDeliveryOptions'] = true;
        $this->customDeliveryOptions = $customDeliveryOptions;
        return $this;
    }
    /**
     * The estimated window for time of delivery.  May be periodically updated based on available in-flight shipment information.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindow
     */
    public function getEstimatedDeliveryTimeWindow(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindow
    {
        return $this->estimatedDeliveryTimeWindow;
    }
    /**
     * The estimated window for time of delivery.  May be periodically updated based on available in-flight shipment information.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindow $estimatedDeliveryTimeWindow
     *
     * @return self
     */
    public function setEstimatedDeliveryTimeWindow(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemEstimatedDeliveryTimeWindow $estimatedDeliveryTimeWindow): self
    {
        $this->initialized['estimatedDeliveryTimeWindow'] = true;
        $this->estimatedDeliveryTimeWindow = $estimatedDeliveryTimeWindow;
        return $this;
    }
    /**
     * Piece count information at origin and destination.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPieceCountsItem>
     */
    public function getPieceCounts(): array
    {
        return $this->pieceCounts;
    }
    /**
     * Piece count information at origin and destination.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPieceCountsItem> $pieceCounts
     *
     * @return self
     */
    public function setPieceCounts(array $pieceCounts): self
    {
        $this->initialized['pieceCounts'] = true;
        $this->pieceCounts = $pieceCounts;
        return $this;
    }
    /**
     * Location details for the FedEx facility where the shipment originated.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation
     */
    public function getOriginLocation(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation
    {
        return $this->originLocation;
    }
    /**
     * Location details for the FedEx facility where the shipment originated.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation $originLocation
     *
     * @return self
     */
    public function setOriginLocation(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation $originLocation): self
    {
        $this->initialized['originLocation'] = true;
        $this->originLocation = $originLocation;
        return $this;
    }
    /**
     * Contact and address information of recipient.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformation
     */
    public function getRecipientInformation(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformation
    {
        return $this->recipientInformation;
    }
    /**
     * Contact and address information of recipient.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformation $recipientInformation
     *
     * @return self
     */
    public function setRecipientInformation(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemRecipientInformation $recipientInformation): self
    {
        $this->initialized['recipientInformation'] = true;
        $this->recipientInformation = $recipientInformation;
        return $this;
    }
    /**
     * The standard committed window of time by which the package is expected to be delivered.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindow
     */
    public function getStandardTransitTimeWindow(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindow
    {
        return $this->standardTransitTimeWindow;
    }
    /**
     * The standard committed window of time by which the package is expected to be delivered.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindow $standardTransitTimeWindow
     *
     * @return self
     */
    public function setStandardTransitTimeWindow(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemStandardTransitTimeWindow $standardTransitTimeWindow): self
    {
        $this->initialized['standardTransitTimeWindow'] = true;
        $this->standardTransitTimeWindow = $standardTransitTimeWindow;
        return $this;
    }
    /**
     * Shipment level details for the shipment being tracked. Includes overall shipment weight, contents etc.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails
     */
    public function getShipmentDetails(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails
    {
        return $this->shipmentDetails;
    }
    /**
     * Shipment level details for the shipment being tracked. Includes overall shipment weight, contents etc.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails $shipmentDetails
     *
     * @return self
     */
    public function setShipmentDetails(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetails $shipmentDetails): self
    {
        $this->initialized['shipmentDetails'] = true;
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }
    /**
     * This object contains reason description and type.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReasonDetail
     */
    public function getReasonDetail(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReasonDetail
    {
        return $this->reasonDetail;
    }
    /**
     * This object contains reason description and type.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReasonDetail $reasonDetail
     *
     * @return self
     */
    public function setReasonDetail(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemReasonDetail $reasonDetail): self
    {
        $this->initialized['reasonDetail'] = true;
        $this->reasonDetail = $reasonDetail;
        return $this;
    }
    /**
     * The types of email notifications that are available for the package. <br> Example:ON_DELIVERY
     *
     * @return list<string>
     */
    public function getAvailableNotifications(): array
    {
        return $this->availableNotifications;
    }
    /**
     * The types of email notifications that are available for the package. <br> Example:ON_DELIVERY
     *
     * @param list<string> $availableNotifications
     *
     * @return self
     */
    public function setAvailableNotifications(array $availableNotifications): self
    {
        $this->initialized['availableNotifications'] = true;
        $this->availableNotifications = $availableNotifications;
        return $this;
    }
    /**
     * Contact and address information of shipper.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformation
     */
    public function getShipperInformation(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformation
    {
        return $this->shipperInformation;
    }
    /**
     * Contact and address information of shipper.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformation $shipperInformation
     *
     * @return self
     */
    public function setShipperInformation(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipperInformation $shipperInformation): self
    {
        $this->initialized['shipperInformation'] = true;
        $this->shipperInformation = $shipperInformation;
        return $this;
    }
    /**
     * Last updated delivery address for the package.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLastUpdatedDestinationAddress
     */
    public function getLastUpdatedDestinationAddress(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLastUpdatedDestinationAddress
    {
        return $this->lastUpdatedDestinationAddress;
    }
    /**
     * Last updated delivery address for the package.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLastUpdatedDestinationAddress $lastUpdatedDestinationAddress
     *
     * @return self
     */
    public function setLastUpdatedDestinationAddress(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLastUpdatedDestinationAddress $lastUpdatedDestinationAddress): self
    {
        $this->initialized['lastUpdatedDestinationAddress'] = true;
        $this->lastUpdatedDestinationAddress = $lastUpdatedDestinationAddress;
        return $this;
    }
}