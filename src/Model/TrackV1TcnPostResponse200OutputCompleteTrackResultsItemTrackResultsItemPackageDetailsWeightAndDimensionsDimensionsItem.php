<?php

namespace AntibodiesOnline\FedEx\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensionsDimensionsItem extends \ArrayObject
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
     * @var int
     */
    protected $length;
    /**
     * Indicate the width of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * @var int
     */
    protected $width;
    /**
     * Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * @var int
     */
    protected $height;
    /**
     * Unit of measure for the provided dimensions.<br>Valid Values are IN - inches, CM - centimeters. <br>Note: Any value other than CM including blank/null will default to IN. <br>Example: CM
     *
     * @var string
     */
    protected $units;
    /**
     * Indicate the length of the package. No implied decimal places. Maximum value: 999 <br> Example: 20
     *
     * @return int
     */
    public function getLength() : int
    {
        return $this->length;
    }
    /**
     * Indicate the length of the package. No implied decimal places. Maximum value: 999 <br> Example: 20
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
     * Indicate the width of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * Indicate the width of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
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
     * Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
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
     * Unit of measure for the provided dimensions.<br>Valid Values are IN - inches, CM - centimeters. <br>Note: Any value other than CM including blank/null will default to IN. <br>Example: CM
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Unit of measure for the provided dimensions.<br>Valid Values are IN - inches, CM - centimeters. <br>Note: Any value other than CM including blank/null will default to IN. <br>Example: CM
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