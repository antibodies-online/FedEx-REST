<?php

namespace AntibodiesOnline\FedEx\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensions extends \ArrayObject
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
     * Field which holds the weight of the package.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensionsWeightItem>
     */
    protected $weight;
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensionsDimensionsItem>
     */
    protected $dimensions;
    /**
     * Field which holds the weight of the package.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensionsWeightItem>
     */
    public function getWeight() : array
    {
        return $this->weight;
    }
    /**
     * Field which holds the weight of the package.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensionsWeightItem> $weight
     *
     * @return self
     */
    public function setWeight(array $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensionsDimensionsItem>
     */
    public function getDimensions() : array
    {
        return $this->dimensions;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsWeightAndDimensionsDimensionsItem> $dimensions
     *
     * @return self
     */
    public function setDimensions(array $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
}