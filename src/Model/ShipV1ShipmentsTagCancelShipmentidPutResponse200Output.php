<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsTagCancelShipmentidPutResponse200Output extends \ArrayObject
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
     * Indicates whether the tag has been cancelled or not. If true, then the tag has been successfully cancelled.<br>Example: true
     *
     * @var bool
     */
    protected $cancelledTag;
    /**
     * Message received when a tag is successfully cancelled.<br>Example: success
     *
     * @var string
     */
    protected $successMessage;
    /**
     * Indicates whether the tag has been cancelled or not. If true, then the tag has been successfully cancelled.<br>Example: true
     *
     * @return bool
     */
    public function getCancelledTag() : bool
    {
        return $this->cancelledTag;
    }
    /**
     * Indicates whether the tag has been cancelled or not. If true, then the tag has been successfully cancelled.<br>Example: true
     *
     * @param bool $cancelledTag
     *
     * @return self
     */
    public function setCancelledTag(bool $cancelledTag) : self
    {
        $this->initialized['cancelledTag'] = true;
        $this->cancelledTag = $cancelledTag;
        return $this;
    }
    /**
     * Message received when a tag is successfully cancelled.<br>Example: success
     *
     * @return string
     */
    public function getSuccessMessage() : string
    {
        return $this->successMessage;
    }
    /**
     * Message received when a tag is successfully cancelled.<br>Example: success
     *
     * @param string $successMessage
     *
     * @return self
     */
    public function setSuccessMessage(string $successMessage) : self
    {
        $this->initialized['successMessage'] = true;
        $this->successMessage = $successMessage;
        return $this;
    }
}