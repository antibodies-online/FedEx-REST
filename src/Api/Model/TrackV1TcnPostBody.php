<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostBody extends \ArrayObject
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
     * The information associated with the transportation control number.<br>Only 1 TCN is supported per request.
     *
     * @var TrackV1TcnPostBodyTcnInfo
     */
    protected $tcnInfo;
    /**
     * Indicates if detailed scans are requested or not. <br/>Valid values are True, or False.
     *
     * @var bool
     */
    protected $includeDetailedScans;
    /**
     * The information associated with the transportation control number.<br>Only 1 TCN is supported per request.
     *
     * @return TrackV1TcnPostBodyTcnInfo
     */
    public function getTcnInfo(): TrackV1TcnPostBodyTcnInfo
    {
        return $this->tcnInfo;
    }
    /**
     * The information associated with the transportation control number.<br>Only 1 TCN is supported per request.
     *
     * @param TrackV1TcnPostBodyTcnInfo $tcnInfo
     *
     * @return self
     */
    public function setTcnInfo(TrackV1TcnPostBodyTcnInfo $tcnInfo): self
    {
        $this->initialized['tcnInfo'] = true;
        $this->tcnInfo = $tcnInfo;
        return $this;
    }
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
}