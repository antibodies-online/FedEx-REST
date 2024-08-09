<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostBodyTrackingInfo extends \ArrayObject
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
     * A unique tracking number identifying a shipment. Used to return locations that are relevant to the shipment.<br> Example: 012345678912
     *
     * @var string
     */
    protected $uniqueTrackingId;
    /**
     * A tracking number identifying a shipment. Used to return locations that are relevant to the shipment.<br>Example: 123456789012
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * The date of shipment.<br> Example: 2019-10-13
     *
     * @var string
     */
    protected $shipDate;
    /**
     * A unique tracking number identifying a shipment. Used to return locations that are relevant to the shipment.<br> Example: 012345678912
     *
     * @return string
     */
    public function getUniqueTrackingId(): string
    {
        return $this->uniqueTrackingId;
    }
    /**
     * A unique tracking number identifying a shipment. Used to return locations that are relevant to the shipment.<br> Example: 012345678912
     *
     * @param string $uniqueTrackingId
     *
     * @return self
     */
    public function setUniqueTrackingId(string $uniqueTrackingId): self
    {
        $this->initialized['uniqueTrackingId'] = true;
        $this->uniqueTrackingId = $uniqueTrackingId;
        return $this;
    }
    /**
     * A tracking number identifying a shipment. Used to return locations that are relevant to the shipment.<br>Example: 123456789012
     *
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
    /**
     * A tracking number identifying a shipment. Used to return locations that are relevant to the shipment.<br>Example: 123456789012
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber): self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * The date of shipment.<br> Example: 2019-10-13
     *
     * @return string
     */
    public function getShipDate(): string
    {
        return $this->shipDate;
    }
    /**
     * The date of shipment.<br> Example: 2019-10-13
     *
     * @param string $shipDate
     *
     * @return self
     */
    public function setShipDate(string $shipDate): self
    {
        $this->initialized['shipDate'] = true;
        $this->shipDate = $shipDate;
        return $this;
    }
}