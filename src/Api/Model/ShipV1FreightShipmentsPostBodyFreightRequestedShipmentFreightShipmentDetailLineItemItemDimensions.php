<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItemDimensions extends \ArrayObject
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
     * 
     *
     * @var int
     */
    protected $length;
    /**
     * 
     *
     * @var int
     */
    protected $width;
    /**
     * 
     *
     * @var int
     */
    protected $height;
    /**
     * 
     *
     * @var string
     */
    protected $units;
    /**
     * 
     *
     * @return int
     */
    public function getLength() : int
    {
        return $this->length;
    }
    /**
     * 
     *
     * @param int $length
     *
     * @return self
     */
    public function setLength(int $length) : self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * 
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * 
     *
     * @param string $units
     *
     * @return self
     */
    public function setUnits(string $units) : self
    {
        $this->initialized['units'] = true;
        $this->units = $units;
        return $this;
    }
}