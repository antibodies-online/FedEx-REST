<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class LocationV1LocationsPostResponse200OutputlatestLocationPackageMaximumLimitsdimensions extends \ArrayObject
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
     * Indicate the length of the package. No implied decimal places. Maximum value is 999.<br> Example: 20.
     *
     * @var int
     */
    protected $length;
    /**
     * Indicate the width of the package. No implied decimal places. Maximum value is 999.<br> Example: 10.
     *
     * @var int
     */
    protected $width;
    /**
     * Indicate the height of the package. No implied decimal places. Maximum value is 999.<br> Example: 10.
     *
     * @var int
     */
    protected $height;
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul><i>Note: <ul><li>The maximum/minimum dimension values varies based on the services and the packaging types.</i> Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.</li><li>Any value other than CM including blank/null will default to IN.</li></ul>.
     *
     * @var string
     */
    protected $units;

    /**
     * Indicate the length of the package. No implied decimal places. Maximum value is 999.<br> Example: 20.
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Indicate the length of the package. No implied decimal places. Maximum value is 999.<br> Example: 20.
     */
    public function setLength(int $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;

        return $this;
    }

    /**
     * Indicate the width of the package. No implied decimal places. Maximum value is 999.<br> Example: 10.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Indicate the width of the package. No implied decimal places. Maximum value is 999.<br> Example: 10.
     */
    public function setWidth(int $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;

        return $this;
    }

    /**
     * Indicate the height of the package. No implied decimal places. Maximum value is 999.<br> Example: 10.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Indicate the height of the package. No implied decimal places. Maximum value is 999.<br> Example: 10.
     */
    public function setHeight(int $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;

        return $this;
    }

    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul><i>Note: <ul><li>The maximum/minimum dimension values varies based on the services and the packaging types.</i> Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.</li><li>Any value other than CM including blank/null will default to IN.</li></ul>.
     */
    public function getUnits(): string
    {
        return $this->units;
    }

    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul><i>Note: <ul><li>The maximum/minimum dimension values varies based on the services and the packaging types.</i> Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.</li><li>Any value other than CM including blank/null will default to IN.</li></ul>.
     */
    public function setUnits(string $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;

        return $this;
    }
}
