<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesBinaryBarcodesItem extends \ArrayObject
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
     * This is the type of barcode data available in this instance.<br> Example: COMMON-2D
     *
     * @var string
     */
    protected $type;
    /**
     * This is the value.
     *
     * @var string
     */
    protected $value;
    /**
     * This is the type of barcode data available in this instance.<br> Example: COMMON-2D
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * This is the type of barcode data available in this instance.<br> Example: COMMON-2D
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
     * This is the value.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * This is the value.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}