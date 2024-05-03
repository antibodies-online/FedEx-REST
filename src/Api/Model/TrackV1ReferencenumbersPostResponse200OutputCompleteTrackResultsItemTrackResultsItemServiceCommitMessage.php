<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceCommitMessage extends \ArrayObject
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
     * Field which holds the commitment message for this package.<br> Example: No scheduled delivery date available at this time.
     *
     * @var string
     */
    protected $message;
    /**
     * Field which holds the type of service commit message.<br> Example: ESTIMATED_DELIVERY_DATE_UNAVAILABLE
     *
     * @var string
     */
    protected $type;
    /**
     * Field which holds the commitment message for this package.<br> Example: No scheduled delivery date available at this time.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Field which holds the commitment message for this package.<br> Example: No scheduled delivery date available at this time.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Field which holds the type of service commit message.<br> Example: ESTIMATED_DELIVERY_DATE_UNAVAILABLE
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Field which holds the type of service commit message.<br> Example: ESTIMATED_DELIVERY_DATE_UNAVAILABLE
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
}