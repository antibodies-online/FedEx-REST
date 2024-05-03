<?php

namespace AntibodiesOnline\FedEx\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemLatestStatusDetailDelayDetail extends \ArrayObject
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
     * Specifies the type of delay.
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies the subType of delay.
     *
     * @var string
     */
    protected $subType;
    /**
     * Specifies the status of package indicating whether a package is arriving early or is on time or has been delayed.
     *
     * @var string
     */
    protected $status;
    /**
     * Specifies the type of delay.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Specifies the type of delay.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Specifies the subType of delay.
     *
     * @return string
     */
    public function getSubType() : string
    {
        return $this->subType;
    }
    /**
     * Specifies the subType of delay.
     *
     * @param string $subType
     *
     * @return self
     */
    public function setSubType(string $subType) : self
    {
        $this->initialized['subType'] = true;
        $this->subType = $subType;
        return $this;
    }
    /**
     * Specifies the status of package indicating whether a package is arriving early or is on time or has been delayed.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Specifies the status of package indicating whether a package is arriving early or is on time or has been delayed.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}