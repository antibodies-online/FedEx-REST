<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetails extends \ArrayObject
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
     * Indicate the physical package type for non-Express shipments.<br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Available Types</a>
     *
     * @var string
     */
    protected $physicalPackagingType;
    /**
     * Field which holds the number representing which package in a multi-piece shipment applies to this TrackDetail.<br> Example: 45
     *
     * @var string
     */
    protected $sequenceNumber;
    /**
     * Field which holds information about total count of the undelivered packages in the shipment. <br> Example: 7
     *
     * @var string
     */
    protected $undeliveredCount;
    /**
     * Description of the packaging used for this shipment.
     *
     * @var TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsPackagingDescription
     */
    protected $packagingDescription;
    /**
     * Field which holds the total number of pieces in the shipment which includes the package represented by this TrackDetail.<br> Example: 1
     *
     * @var string
     */
    protected $count;
    /**
     * Field which holds the weight and dimension information.
     *
     * @var TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensions
     */
    protected $weightAndDimensions;
    /**
     * Field which holds information about the package content of the shipment. Populated for secure users only.<br> Example: wire hangers.
     *
     * @var list<string>
     */
    protected $packageContent;
    /**
     * Field which holds information about total count of the packages in the shipment.<br> Example: 100
     *
     * @var string
     */
    protected $contentPieceCount;
    /**
     * This is the declared value. Declared Value represents FedEx maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @var TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsDeclaredValue
     */
    protected $declaredValue;
    /**
     * Indicate the physical package type for non-Express shipments.<br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Available Types</a>
     *
     * @return string
     */
    public function getPhysicalPackagingType() : string
    {
        return $this->physicalPackagingType;
    }
    /**
     * Indicate the physical package type for non-Express shipments.<br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Available Types</a>
     *
     * @param string $physicalPackagingType
     *
     * @return self
     */
    public function setPhysicalPackagingType(string $physicalPackagingType) : self
    {
        $this->initialized['physicalPackagingType'] = true;
        $this->physicalPackagingType = $physicalPackagingType;
        return $this;
    }
    /**
     * Field which holds the number representing which package in a multi-piece shipment applies to this TrackDetail.<br> Example: 45
     *
     * @return string
     */
    public function getSequenceNumber() : string
    {
        return $this->sequenceNumber;
    }
    /**
     * Field which holds the number representing which package in a multi-piece shipment applies to this TrackDetail.<br> Example: 45
     *
     * @param string $sequenceNumber
     *
     * @return self
     */
    public function setSequenceNumber(string $sequenceNumber) : self
    {
        $this->initialized['sequenceNumber'] = true;
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Field which holds information about total count of the undelivered packages in the shipment. <br> Example: 7
     *
     * @return string
     */
    public function getUndeliveredCount() : string
    {
        return $this->undeliveredCount;
    }
    /**
     * Field which holds information about total count of the undelivered packages in the shipment. <br> Example: 7
     *
     * @param string $undeliveredCount
     *
     * @return self
     */
    public function setUndeliveredCount(string $undeliveredCount) : self
    {
        $this->initialized['undeliveredCount'] = true;
        $this->undeliveredCount = $undeliveredCount;
        return $this;
    }
    /**
     * Description of the packaging used for this shipment.
     *
     * @return TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsPackagingDescription
     */
    public function getPackagingDescription() : TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsPackagingDescription
    {
        return $this->packagingDescription;
    }
    /**
     * Description of the packaging used for this shipment.
     *
     * @param TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsPackagingDescription $packagingDescription
     *
     * @return self
     */
    public function setPackagingDescription(TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsPackagingDescription $packagingDescription) : self
    {
        $this->initialized['packagingDescription'] = true;
        $this->packagingDescription = $packagingDescription;
        return $this;
    }
    /**
     * Field which holds the total number of pieces in the shipment which includes the package represented by this TrackDetail.<br> Example: 1
     *
     * @return string
     */
    public function getCount() : string
    {
        return $this->count;
    }
    /**
     * Field which holds the total number of pieces in the shipment which includes the package represented by this TrackDetail.<br> Example: 1
     *
     * @param string $count
     *
     * @return self
     */
    public function setCount(string $count) : self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Field which holds the weight and dimension information.
     *
     * @return TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensions
     */
    public function getWeightAndDimensions() : TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensions
    {
        return $this->weightAndDimensions;
    }
    /**
     * Field which holds the weight and dimension information.
     *
     * @param TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensions $weightAndDimensions
     *
     * @return self
     */
    public function setWeightAndDimensions(TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensions $weightAndDimensions) : self
    {
        $this->initialized['weightAndDimensions'] = true;
        $this->weightAndDimensions = $weightAndDimensions;
        return $this;
    }
    /**
     * Field which holds information about the package content of the shipment. Populated for secure users only.<br> Example: wire hangers.
     *
     * @return list<string>
     */
    public function getPackageContent() : array
    {
        return $this->packageContent;
    }
    /**
     * Field which holds information about the package content of the shipment. Populated for secure users only.<br> Example: wire hangers.
     *
     * @param list<string> $packageContent
     *
     * @return self
     */
    public function setPackageContent(array $packageContent) : self
    {
        $this->initialized['packageContent'] = true;
        $this->packageContent = $packageContent;
        return $this;
    }
    /**
     * Field which holds information about total count of the packages in the shipment.<br> Example: 100
     *
     * @return string
     */
    public function getContentPieceCount() : string
    {
        return $this->contentPieceCount;
    }
    /**
     * Field which holds information about total count of the packages in the shipment.<br> Example: 100
     *
     * @param string $contentPieceCount
     *
     * @return self
     */
    public function setContentPieceCount(string $contentPieceCount) : self
    {
        $this->initialized['contentPieceCount'] = true;
        $this->contentPieceCount = $contentPieceCount;
        return $this;
    }
    /**
     * This is the declared value. Declared Value represents FedEx maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @return TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsDeclaredValue
     */
    public function getDeclaredValue() : TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsDeclaredValue
    {
        return $this->declaredValue;
    }
    /**
     * This is the declared value. Declared Value represents FedEx maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @param TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsDeclaredValue $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue(TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsDeclaredValue $declaredValue) : self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;
        return $this;
    }
}