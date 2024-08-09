<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItem extends \ArrayObject
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
     * The timestamp for the consolidation. <br> Example: 2020-10-13T03:54:44-06:00
     *
     * @var string
     */
    protected $timeStamp;
    /**
     * The identifier for the consolidation. <br> Example: 47936927
     *
     * @var string
     */
    protected $consolidationID;
    /**
     * Specifies the reason details for the consolidation event for a package.
     *
     * @var TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItemReasonDetail
     */
    protected $reasonDetail;
    /**
     * Specifies the package count for the consolidation. <br> Example: 25
     *
     * @var int
     */
    protected $packageCount;
    /**
     * Specifies the consolidation event type for a package.  A package can be ADDED to, REMOVED from, or EXCLUDED from a consolidation. <br> Example: PACKAGE_ADDED_TO_CONSOLIDATION
     *
     * @var string
     */
    protected $eventType;
    /**
     * The timestamp for the consolidation. <br> Example: 2020-10-13T03:54:44-06:00
     *
     * @return string
     */
    public function getTimeStamp(): string
    {
        return $this->timeStamp;
    }
    /**
     * The timestamp for the consolidation. <br> Example: 2020-10-13T03:54:44-06:00
     *
     * @param string $timeStamp
     *
     * @return self
     */
    public function setTimeStamp(string $timeStamp): self
    {
        $this->initialized['timeStamp'] = true;
        $this->timeStamp = $timeStamp;
        return $this;
    }
    /**
     * The identifier for the consolidation. <br> Example: 47936927
     *
     * @return string
     */
    public function getConsolidationID(): string
    {
        return $this->consolidationID;
    }
    /**
     * The identifier for the consolidation. <br> Example: 47936927
     *
     * @param string $consolidationID
     *
     * @return self
     */
    public function setConsolidationID(string $consolidationID): self
    {
        $this->initialized['consolidationID'] = true;
        $this->consolidationID = $consolidationID;
        return $this;
    }
    /**
     * Specifies the reason details for the consolidation event for a package.
     *
     * @return TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItemReasonDetail
     */
    public function getReasonDetail(): TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItemReasonDetail
    {
        return $this->reasonDetail;
    }
    /**
     * Specifies the reason details for the consolidation event for a package.
     *
     * @param TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItemReasonDetail $reasonDetail
     *
     * @return self
     */
    public function setReasonDetail(TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItemReasonDetail $reasonDetail): self
    {
        $this->initialized['reasonDetail'] = true;
        $this->reasonDetail = $reasonDetail;
        return $this;
    }
    /**
     * Specifies the package count for the consolidation. <br> Example: 25
     *
     * @return int
     */
    public function getPackageCount(): int
    {
        return $this->packageCount;
    }
    /**
     * Specifies the package count for the consolidation. <br> Example: 25
     *
     * @param int $packageCount
     *
     * @return self
     */
    public function setPackageCount(int $packageCount): self
    {
        $this->initialized['packageCount'] = true;
        $this->packageCount = $packageCount;
        return $this;
    }
    /**
     * Specifies the consolidation event type for a package.  A package can be ADDED to, REMOVED from, or EXCLUDED from a consolidation. <br> Example: PACKAGE_ADDED_TO_CONSOLIDATION
     *
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }
    /**
     * Specifies the consolidation event type for a package.  A package can be ADDED to, REMOVED from, or EXCLUDED from a consolidation. <br> Example: PACKAGE_ADDED_TO_CONSOLIDATION
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
}