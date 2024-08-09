<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostBodyPackageAttributesItem extends \ArrayObject
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
     * Specify the package weight.
     *
     * @var LocationV1LocationsPostBodyPackageAttributesItemWeight
     */
    protected $weight;
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul><i>Note: The maximum/minimum dimension values varies based on the services and the packaging types.</i><br>Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @var LocationV1LocationsPostBodyPackageAttributesItemDimensions
     */
    protected $dimensions;
    /**
     * Specify the package weight.
     *
     * @return LocationV1LocationsPostBodyPackageAttributesItemWeight
     */
    public function getWeight(): LocationV1LocationsPostBodyPackageAttributesItemWeight
    {
        return $this->weight;
    }
    /**
     * Specify the package weight.
     *
     * @param LocationV1LocationsPostBodyPackageAttributesItemWeight $weight
     *
     * @return self
     */
    public function setWeight(LocationV1LocationsPostBodyPackageAttributesItemWeight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul><i>Note: The maximum/minimum dimension values varies based on the services and the packaging types.</i><br>Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @return LocationV1LocationsPostBodyPackageAttributesItemDimensions
     */
    public function getDimensions(): LocationV1LocationsPostBodyPackageAttributesItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul><i>Note: The maximum/minimum dimension values varies based on the services and the packaging types.</i><br>Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @param LocationV1LocationsPostBodyPackageAttributesItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(LocationV1LocationsPostBodyPackageAttributesItemDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
}