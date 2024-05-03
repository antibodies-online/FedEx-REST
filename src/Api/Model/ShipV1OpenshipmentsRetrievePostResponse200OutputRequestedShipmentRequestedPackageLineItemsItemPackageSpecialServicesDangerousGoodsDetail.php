<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail extends \ArrayObject
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
     * Specify Dangerous Goods Accessibility Type. <ul><li>Inaccessible &ndash; it does not have to be accessable on the aircraft.</li><li>Accessible &ndash; it must be fully accessible on the aircraft, and is more strictly controlled.</li></ul>
     *
     * @var string
     */
    protected $accessibility;
    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. Its default value is set as False.<br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     *
     * @var bool
     */
    protected $cargoAircraftOnly;
    /**
     * Indicate type of DG being reported.
     *
     * @var list<string>
     */
    protected $options;
    /**
     * Specify Dangerous Goods Accessibility Type. <ul><li>Inaccessible &ndash; it does not have to be accessable on the aircraft.</li><li>Accessible &ndash; it must be fully accessible on the aircraft, and is more strictly controlled.</li></ul>
     *
     * @return string
     */
    public function getAccessibility() : string
    {
        return $this->accessibility;
    }
    /**
     * Specify Dangerous Goods Accessibility Type. <ul><li>Inaccessible &ndash; it does not have to be accessable on the aircraft.</li><li>Accessible &ndash; it must be fully accessible on the aircraft, and is more strictly controlled.</li></ul>
     *
     * @param string $accessibility
     *
     * @return self
     */
    public function setAccessibility(string $accessibility) : self
    {
        $this->initialized['accessibility'] = true;
        $this->accessibility = $accessibility;
        return $this;
    }
    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. Its default value is set as False.<br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     *
     * @return bool
     */
    public function getCargoAircraftOnly() : bool
    {
        return $this->cargoAircraftOnly;
    }
    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. Its default value is set as False.<br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     *
     * @param bool $cargoAircraftOnly
     *
     * @return self
     */
    public function setCargoAircraftOnly(bool $cargoAircraftOnly) : self
    {
        $this->initialized['cargoAircraftOnly'] = true;
        $this->cargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    /**
     * Indicate type of DG being reported.
     *
     * @return list<string>
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * Indicate type of DG being reported.
     *
     * @param list<string> $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}