<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsPostBodyExpressFreightDetail extends \ArrayObject
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
     * Specify type of pickup truck. 
     *
     * @var string
     */
    protected $truckType;
    /**
     * Specify FedEx Service for the shipment.<br>Example: FEDEX_1_DAY_FREIGHT
     *
     * @var string
     */
    protected $service;
    /**
     * Specify the trailer size, required for dispatch. 
     *
     * @var string
     */
    protected $trailerLength;
    /**
     * Specify a freight shipment booking number from FedEx. This number is mandatory for freight dispatch requests.<br> Example: 1234AGTT  
     *
     * @var string
     */
    protected $bookingNumber;
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @var PickupV1PickupsPostBodyExpressFreightDetaildimensions
     */
    protected $dimensions;
    /**
     * Specify type of pickup truck. 
     *
     * @return string
     */
    public function getTruckType(): string
    {
        return $this->truckType;
    }
    /**
     * Specify type of pickup truck. 
     *
     * @param string $truckType
     *
     * @return self
     */
    public function setTruckType(string $truckType): self
    {
        $this->initialized['truckType'] = true;
        $this->truckType = $truckType;
        return $this;
    }
    /**
     * Specify FedEx Service for the shipment.<br>Example: FEDEX_1_DAY_FREIGHT
     *
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }
    /**
     * Specify FedEx Service for the shipment.<br>Example: FEDEX_1_DAY_FREIGHT
     *
     * @param string $service
     *
     * @return self
     */
    public function setService(string $service): self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Specify the trailer size, required for dispatch. 
     *
     * @return string
     */
    public function getTrailerLength(): string
    {
        return $this->trailerLength;
    }
    /**
     * Specify the trailer size, required for dispatch. 
     *
     * @param string $trailerLength
     *
     * @return self
     */
    public function setTrailerLength(string $trailerLength): self
    {
        $this->initialized['trailerLength'] = true;
        $this->trailerLength = $trailerLength;
        return $this;
    }
    /**
     * Specify a freight shipment booking number from FedEx. This number is mandatory for freight dispatch requests.<br> Example: 1234AGTT  
     *
     * @return string
     */
    public function getBookingNumber(): string
    {
        return $this->bookingNumber;
    }
    /**
     * Specify a freight shipment booking number from FedEx. This number is mandatory for freight dispatch requests.<br> Example: 1234AGTT  
     *
     * @param string $bookingNumber
     *
     * @return self
     */
    public function setBookingNumber(string $bookingNumber): self
    {
        $this->initialized['bookingNumber'] = true;
        $this->bookingNumber = $bookingNumber;
        return $this;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @return PickupV1PickupsPostBodyExpressFreightDetaildimensions
     */
    public function getDimensions(): PickupV1PickupsPostBodyExpressFreightDetaildimensions
    {
        return $this->dimensions;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @param PickupV1PickupsPostBodyExpressFreightDetaildimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(PickupV1PickupsPostBodyExpressFreightDetaildimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
}