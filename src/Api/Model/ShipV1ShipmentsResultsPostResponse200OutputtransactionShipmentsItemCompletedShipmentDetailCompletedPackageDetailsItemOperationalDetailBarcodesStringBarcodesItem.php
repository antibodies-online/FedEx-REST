<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailBarcodesStringBarcodesItem extends \ArrayObject
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
     * This is the type of barcode data in this instance. <br>Valid values:<ul><li>ADDRESS - Represents the recipient address.</li></ul>
     *
     * @var string
     */
    protected $type;
    /**
     * This is the value.<br>Example: 1010062512241535917900794953544894
     *
     * @var string
     */
    protected $value;
    /**
     * This is the type of barcode data in this instance. <br>Valid values:<ul><li>ADDRESS - Represents the recipient address.</li></ul>
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * This is the type of barcode data in this instance. <br>Valid values:<ul><li>ADDRESS - Represents the recipient address.</li></ul>
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
     * This is the value.<br>Example: 1010062512241535917900794953544894
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * This is the value.<br>Example: 1010062512241535917900794953544894
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