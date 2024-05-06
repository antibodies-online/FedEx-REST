<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem extends \ArrayObject
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
     * This is the Declared Value - represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDeclaredValue
     */
    protected $declaredValue;
    /**
     * Weight of the packages or shipment
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemWeight
     */
    protected $weight;
    /**
     * Specify the dimensions of this package and the unit type used for the measurements. Valid measurements are whole numbers greater than zero.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDimensions
     */
    protected $dimensions;
    /**
     * Optional.<br>These special services are available at the package level for some or all service types.  Indicated if rate data is being requested for the special services.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices
     */
    protected $packageSpecialServices;
    /**
     * This is the Declared Value - represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDeclaredValue
     */
    public function getDeclaredValue() : AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDeclaredValue
    {
        return $this->declaredValue;
    }
    /**
     * This is the Declared Value - represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDeclaredValue $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue(AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDeclaredValue $declaredValue) : self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;
        return $this;
    }
    /**
     * Weight of the packages or shipment
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemWeight
     */
    public function getWeight() : AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemWeight
    {
        return $this->weight;
    }
    /**
     * Weight of the packages or shipment
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemWeight $weight
     *
     * @return self
     */
    public function setWeight(AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemWeight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Specify the dimensions of this package and the unit type used for the measurements. Valid measurements are whole numbers greater than zero.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDimensions
     */
    public function getDimensions() : AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Specify the dimensions of this package and the unit type used for the measurements. Valid measurements are whole numbers greater than zero.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Optional.<br>These special services are available at the package level for some or all service types.  Indicated if rate data is being requested for the special services.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices
     */
    public function getPackageSpecialServices() : AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices
    {
        return $this->packageSpecialServices;
    }
    /**
     * Optional.<br>These special services are available at the package level for some or all service types.  Indicated if rate data is being requested for the special services.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices $packageSpecialServices
     *
     * @return self
     */
    public function setPackageSpecialServices(AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServices $packageSpecialServices) : self
    {
        $this->initialized['packageSpecialServices'] = true;
        $this->packageSpecialServices = $packageSpecialServices;
        return $this;
    }
}