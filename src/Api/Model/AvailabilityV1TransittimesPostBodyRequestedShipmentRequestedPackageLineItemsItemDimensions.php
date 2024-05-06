<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDimensions extends \ArrayObject
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
     * Length of a package or shipment. Maximum Length is 999. <br> Example: 100
     *
     * @var int
     */
    protected $length;
    /**
     * Width dimensions of a package or shipment. Maximum Length is 999. <br> Example: 50
     *
     * @var int
     */
    protected $width;
    /**
     * Height of a package or shipment. Maximum Length is 999. <br> Example: 30
     *
     * @var int
     */
    protected $height;
    /**
     * Unit of measure for the provided dimensions.<br> Valid Values: IN - inches, CM - centimeters <br>Example: CM
     *
     * @var string
     */
    protected $units;
    /**
     * Length of a package or shipment. Maximum Length is 999. <br> Example: 100
     *
     * @return int
     */
    public function getLength() : int
    {
        return $this->length;
    }
    /**
     * Length of a package or shipment. Maximum Length is 999. <br> Example: 100
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
     * Width dimensions of a package or shipment. Maximum Length is 999. <br> Example: 50
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * Width dimensions of a package or shipment. Maximum Length is 999. <br> Example: 50
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
     * Height of a package or shipment. Maximum Length is 999. <br> Example: 30
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * Height of a package or shipment. Maximum Length is 999. <br> Example: 30
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
     * Unit of measure for the provided dimensions.<br> Valid Values: IN - inches, CM - centimeters <br>Example: CM
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Unit of measure for the provided dimensions.<br> Valid Values: IN - inches, CM - centimeters <br>Example: CM
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