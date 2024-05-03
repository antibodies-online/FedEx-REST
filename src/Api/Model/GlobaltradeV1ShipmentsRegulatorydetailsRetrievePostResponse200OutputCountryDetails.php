<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetails extends \ArrayObject
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
     * These are Shipment Details.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails
     */
    protected $shipmentDetails;
    /**
     * Indicates Country Code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicates the Regulatory details category.
     *
     * @var string
     */
    protected $category;
    /**
     * These are Shipment Details.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails
     */
    public function getShipmentDetails() : GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails
    {
        return $this->shipmentDetails;
    }
    /**
     * These are Shipment Details.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails $shipmentDetails
     *
     * @return self
     */
    public function setShipmentDetails(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetails $shipmentDetails) : self
    {
        $this->initialized['shipmentDetails'] = true;
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }
    /**
     * Indicates Country Code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Indicates Country Code.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Indicates the Regulatory details category.
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * Indicates the Regulatory details category.
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
}