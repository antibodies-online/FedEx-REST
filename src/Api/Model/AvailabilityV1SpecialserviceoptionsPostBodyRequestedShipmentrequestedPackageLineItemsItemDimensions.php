<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDimensions extends \ArrayObject
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
     * Indicate the length of the package. No implied decimal places. Maximum value: 999 <br> Example: 20
     *
     * @var mixed
     */
    protected $length;
    /**
     * Indicate the width of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * @var mixed
     */
    protected $width;
    /**
     * Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * @var mixed
     */
    protected $height;
    /**
     * Indicate the Unit of measure for the provided dimensions.<br>Valid Values are:              <ul><li>IN - inches</li><li>CM - centimeters</li></ul><i>Note: Any value other than CM including blank/null will default to IN.</i><br>Example: CM
     *
     * @var mixed
     */
    protected $units;
    /**
     * Indicate the length of the package. No implied decimal places. Maximum value: 999 <br> Example: 20
     *
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * Indicate the length of the package. No implied decimal places. Maximum value: 999 <br> Example: 20
     *
     * @param mixed $length
     *
     * @return self
     */
    public function setLength($length) : self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * Indicate the width of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Indicate the width of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * @param mixed $width
     *
     * @return self
     */
    public function setWidth($width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * @param mixed $height
     *
     * @return self
     */
    public function setHeight($height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * Indicate the Unit of measure for the provided dimensions.<br>Valid Values are:              <ul><li>IN - inches</li><li>CM - centimeters</li></ul><i>Note: Any value other than CM including blank/null will default to IN.</i><br>Example: CM
     *
     * @return mixed
     */
    public function getUnits()
    {
        return $this->units;
    }
    /**
     * Indicate the Unit of measure for the provided dimensions.<br>Valid Values are:              <ul><li>IN - inches</li><li>CM - centimeters</li></ul><i>Note: Any value other than CM including blank/null will default to IN.</i><br>Example: CM
     *
     * @param mixed $units
     *
     * @return self
     */
    public function setUnits($units) : self
    {
        $this->initialized['units'] = true;
        $this->units = $units;
        return $this;
    }
}