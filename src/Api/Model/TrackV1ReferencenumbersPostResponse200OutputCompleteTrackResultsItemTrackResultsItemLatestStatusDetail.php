<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetail extends \ArrayObject
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
     * Address information related to the associated Status.
     *
     * @var TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailScanLocation
     */
    protected $scanLocation;
    /**
     * A code that identifies this type of status.<br> Example:PU,DE,DP,HL,OC
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the latest status detail code of the package.<br> Example:PU,DE,DP,HL,OC
     *
     * @var string
     */
    protected $derivedCode;
    /**
     * Specifies the cause of exception along with any action that needs to taken by customer.
     *
     * @var list<TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem>
     */
    protected $ancillaryDetails;
    /**
     * This is the latest tracking status by locale.<br> Example: Picked up
     *
     * @var string
     */
    protected $statusByLocale;
    /**
     * A human-readable description of this status.<br> Example: Picked up
     *
     * @var string
     */
    protected $description;
    /**
     * Specifies the information about delays.
     *
     * @var TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailDelayDetail
     */
    protected $delayDetail;
    /**
     * Address information related to the associated Status.
     *
     * @return TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailScanLocation
     */
    public function getScanLocation(): TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailScanLocation
    {
        return $this->scanLocation;
    }
    /**
     * Address information related to the associated Status.
     *
     * @param TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailScanLocation $scanLocation
     *
     * @return self
     */
    public function setScanLocation(TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailScanLocation $scanLocation): self
    {
        $this->initialized['scanLocation'] = true;
        $this->scanLocation = $scanLocation;
        return $this;
    }
    /**
     * A code that identifies this type of status.<br> Example:PU,DE,DP,HL,OC
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * A code that identifies this type of status.<br> Example:PU,DE,DP,HL,OC
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Specifies the latest status detail code of the package.<br> Example:PU,DE,DP,HL,OC
     *
     * @return string
     */
    public function getDerivedCode(): string
    {
        return $this->derivedCode;
    }
    /**
     * Specifies the latest status detail code of the package.<br> Example:PU,DE,DP,HL,OC
     *
     * @param string $derivedCode
     *
     * @return self
     */
    public function setDerivedCode(string $derivedCode): self
    {
        $this->initialized['derivedCode'] = true;
        $this->derivedCode = $derivedCode;
        return $this;
    }
    /**
     * Specifies the cause of exception along with any action that needs to taken by customer.
     *
     * @return list<TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem>
     */
    public function getAncillaryDetails(): array
    {
        return $this->ancillaryDetails;
    }
    /**
     * Specifies the cause of exception along with any action that needs to taken by customer.
     *
     * @param list<TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailAncillaryDetailsItem> $ancillaryDetails
     *
     * @return self
     */
    public function setAncillaryDetails(array $ancillaryDetails): self
    {
        $this->initialized['ancillaryDetails'] = true;
        $this->ancillaryDetails = $ancillaryDetails;
        return $this;
    }
    /**
     * This is the latest tracking status by locale.<br> Example: Picked up
     *
     * @return string
     */
    public function getStatusByLocale(): string
    {
        return $this->statusByLocale;
    }
    /**
     * This is the latest tracking status by locale.<br> Example: Picked up
     *
     * @param string $statusByLocale
     *
     * @return self
     */
    public function setStatusByLocale(string $statusByLocale): self
    {
        $this->initialized['statusByLocale'] = true;
        $this->statusByLocale = $statusByLocale;
        return $this;
    }
    /**
     * A human-readable description of this status.<br> Example: Picked up
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * A human-readable description of this status.<br> Example: Picked up
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Specifies the information about delays.
     *
     * @return TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailDelayDetail
     */
    public function getDelayDetail(): TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailDelayDetail
    {
        return $this->delayDetail;
    }
    /**
     * Specifies the information about delays.
     *
     * @param TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailDelayDetail $delayDetail
     *
     * @return self
     */
    public function setDelayDetail(TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailDelayDetail $delayDetail): self
    {
        $this->initialized['delayDetail'] = true;
        $this->delayDetail = $delayDetail;
        return $this;
    }
}