<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAdditionalTrackingInfoPackageIdentifiersItem extends \ArrayObject
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
     * Indicate the package identifier to identify the package.<br> Example: SHIPPER_REFERENCE
     *
     * @var string
     */
    protected $type;
    /**
     * Field which holds the value of the identifier used to identify the package. <br>Example: 'ASJFGVAS'
     *
     * @var list<string>
     */
    protected $value;
    /**
     * Unique identifier used to distinguish duplicate FedEx tracking numbers. This value will be set by FedEx systems. <br> Example: 245822\~123456789012\~FDEG
     *
     * @var string
     */
    protected $trackingNumberUniqueId;
    /**
     * Indicate the package identifier to identify the package.<br> Example: SHIPPER_REFERENCE
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Indicate the package identifier to identify the package.<br> Example: SHIPPER_REFERENCE
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
     * Field which holds the value of the identifier used to identify the package. <br>Example: 'ASJFGVAS'
     *
     * @return list<string>
     */
    public function getValue() : array
    {
        return $this->value;
    }
    /**
     * Field which holds the value of the identifier used to identify the package. <br>Example: 'ASJFGVAS'
     *
     * @param list<string> $value
     *
     * @return self
     */
    public function setValue(array $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Unique identifier used to distinguish duplicate FedEx tracking numbers. This value will be set by FedEx systems. <br> Example: 245822\~123456789012\~FDEG
     *
     * @return string
     */
    public function getTrackingNumberUniqueId() : string
    {
        return $this->trackingNumberUniqueId;
    }
    /**
     * Unique identifier used to distinguish duplicate FedEx tracking numbers. This value will be set by FedEx systems. <br> Example: 245822\~123456789012\~FDEG
     *
     * @param string $trackingNumberUniqueId
     *
     * @return self
     */
    public function setTrackingNumberUniqueId(string $trackingNumberUniqueId) : self
    {
        $this->initialized['trackingNumberUniqueId'] = true;
        $this->trackingNumberUniqueId = $trackingNumberUniqueId;
        return $this;
    }
}