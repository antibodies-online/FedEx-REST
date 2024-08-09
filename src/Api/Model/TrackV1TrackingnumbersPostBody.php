<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TrackingnumbersPostBody extends \ArrayObject
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
     * Indicates if detailed scans are requested or not. <br/>Valid values are True, or False.
     *
     * @var bool
     */
    protected $includeDetailedScans;
    /**
     * The tracking information of the shipment to be tracked. At least one occurrence of TrackingInfo is required. Maximum limit is 30.
     *
     * @var list<TrackV1TrackingnumbersPostBodyTrackingInfoItem>
     */
    protected $trackingInfo;
    /**
     * Indicates if detailed scans are requested or not. <br/>Valid values are True, or False.
     *
     * @return bool
     */
    public function getIncludeDetailedScans(): bool
    {
        return $this->includeDetailedScans;
    }
    /**
     * Indicates if detailed scans are requested or not. <br/>Valid values are True, or False.
     *
     * @param bool $includeDetailedScans
     *
     * @return self
     */
    public function setIncludeDetailedScans(bool $includeDetailedScans): self
    {
        $this->initialized['includeDetailedScans'] = true;
        $this->includeDetailedScans = $includeDetailedScans;
        return $this;
    }
    /**
     * The tracking information of the shipment to be tracked. At least one occurrence of TrackingInfo is required. Maximum limit is 30.
     *
     * @return list<TrackV1TrackingnumbersPostBodyTrackingInfoItem>
     */
    public function getTrackingInfo(): array
    {
        return $this->trackingInfo;
    }
    /**
     * The tracking information of the shipment to be tracked. At least one occurrence of TrackingInfo is required. Maximum limit is 30.
     *
     * @param list<TrackV1TrackingnumbersPostBodyTrackingInfoItem> $trackingInfo
     *
     * @return self
     */
    public function setTrackingInfo(array $trackingInfo): self
    {
        $this->initialized['trackingInfo'] = true;
        $this->trackingInfo = $trackingInfo;
        return $this;
    }
}