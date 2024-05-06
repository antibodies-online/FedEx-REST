<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentMasterTrackingId extends \ArrayObject
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
     * This is FedEx tracking Identifier associated with the package.<br>Example: 8600
     *
     * @var string
     */
    protected $formId;
    /**
     * Specify the FedEx transportation type. <br>Example: EXPRESS
     *
     * @var string
     */
    protected $trackingIdType;
    /**
     * Specify the USPS tracking Identifier associated with FedEx SmartPost shipment.<br>Example: 92
     *
     * @var string
     */
    protected $uspsApplicationId;
    /**
     * This is a number associated with a package that is used to track it. <br>Example: 49XXX0000XXX20032835
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * This is FedEx tracking Identifier associated with the package.<br>Example: 8600
     *
     * @return string
     */
    public function getFormId() : string
    {
        return $this->formId;
    }
    /**
     * This is FedEx tracking Identifier associated with the package.<br>Example: 8600
     *
     * @param string $formId
     *
     * @return self
     */
    public function setFormId(string $formId) : self
    {
        $this->initialized['formId'] = true;
        $this->formId = $formId;
        return $this;
    }
    /**
     * Specify the FedEx transportation type. <br>Example: EXPRESS
     *
     * @return string
     */
    public function getTrackingIdType() : string
    {
        return $this->trackingIdType;
    }
    /**
     * Specify the FedEx transportation type. <br>Example: EXPRESS
     *
     * @param string $trackingIdType
     *
     * @return self
     */
    public function setTrackingIdType(string $trackingIdType) : self
    {
        $this->initialized['trackingIdType'] = true;
        $this->trackingIdType = $trackingIdType;
        return $this;
    }
    /**
     * Specify the USPS tracking Identifier associated with FedEx SmartPost shipment.<br>Example: 92
     *
     * @return string
     */
    public function getUspsApplicationId() : string
    {
        return $this->uspsApplicationId;
    }
    /**
     * Specify the USPS tracking Identifier associated with FedEx SmartPost shipment.<br>Example: 92
     *
     * @param string $uspsApplicationId
     *
     * @return self
     */
    public function setUspsApplicationId(string $uspsApplicationId) : self
    {
        $this->initialized['uspsApplicationId'] = true;
        $this->uspsApplicationId = $uspsApplicationId;
        return $this;
    }
    /**
     * This is a number associated with a package that is used to track it. <br>Example: 49XXX0000XXX20032835
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * This is a number associated with a package that is used to track it. <br>Example: 49XXX0000XXX20032835
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
}