<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail extends \ArrayObject
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
     * Specifies the hazardous package regulation type.<br>Example: IATA
     *
     * @var string
     */
    protected $regulation;
    /**
     * Specifies the hazardous package accessibility.<br>Example: ACCESSIBLE
     *
     * @var string
     */
    protected $accessibility;
    /**
     * Specifies the label type of hazardous package.<br>Example: II_YELLOW
     *
     * @var string
     */
    protected $labelType;
    /**
     * Indicates one or more approved containers used to pack dangerous goods commodities. This does not describe any individual inner receptacles that may be within this container.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItem>
     */
    protected $containers;
    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. Its default value is set as False.<br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     *
     * @var bool
     */
    protected $cargoAircraftOnly;
    /**
     * A unique reference id that matches the package to a package configuration. This is populated if the client provided a package configuration for several packages that have the exact same dangerous goods content.<br>Example: 123456
     *
     * @var string
     */
    protected $referenceId;
    /**
     * Specifies the maximum radiation level from the package (measured in microSieverts per hour at a distance of one meter from the external surface of the package, divided by 10).<br>Example: 2.45
     *
     * @var float
     */
    protected $radioactiveTransportIndex;
    /**
     * Specifies the hazardous package regulation type.<br>Example: IATA
     *
     * @return string
     */
    public function getRegulation() : string
    {
        return $this->regulation;
    }
    /**
     * Specifies the hazardous package regulation type.<br>Example: IATA
     *
     * @param string $regulation
     *
     * @return self
     */
    public function setRegulation(string $regulation) : self
    {
        $this->initialized['regulation'] = true;
        $this->regulation = $regulation;
        return $this;
    }
    /**
     * Specifies the hazardous package accessibility.<br>Example: ACCESSIBLE
     *
     * @return string
     */
    public function getAccessibility() : string
    {
        return $this->accessibility;
    }
    /**
     * Specifies the hazardous package accessibility.<br>Example: ACCESSIBLE
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
     * Specifies the label type of hazardous package.<br>Example: II_YELLOW
     *
     * @return string
     */
    public function getLabelType() : string
    {
        return $this->labelType;
    }
    /**
     * Specifies the label type of hazardous package.<br>Example: II_YELLOW
     *
     * @param string $labelType
     *
     * @return self
     */
    public function setLabelType(string $labelType) : self
    {
        $this->initialized['labelType'] = true;
        $this->labelType = $labelType;
        return $this;
    }
    /**
     * Indicates one or more approved containers used to pack dangerous goods commodities. This does not describe any individual inner receptacles that may be within this container.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItem>
     */
    public function getContainers() : array
    {
        return $this->containers;
    }
    /**
     * Indicates one or more approved containers used to pack dangerous goods commodities. This does not describe any individual inner receptacles that may be within this container.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItem> $containers
     *
     * @return self
     */
    public function setContainers(array $containers) : self
    {
        $this->initialized['containers'] = true;
        $this->containers = $containers;
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
     * A unique reference id that matches the package to a package configuration. This is populated if the client provided a package configuration for several packages that have the exact same dangerous goods content.<br>Example: 123456
     *
     * @return string
     */
    public function getReferenceId() : string
    {
        return $this->referenceId;
    }
    /**
     * A unique reference id that matches the package to a package configuration. This is populated if the client provided a package configuration for several packages that have the exact same dangerous goods content.<br>Example: 123456
     *
     * @param string $referenceId
     *
     * @return self
     */
    public function setReferenceId(string $referenceId) : self
    {
        $this->initialized['referenceId'] = true;
        $this->referenceId = $referenceId;
        return $this;
    }
    /**
     * Specifies the maximum radiation level from the package (measured in microSieverts per hour at a distance of one meter from the external surface of the package, divided by 10).<br>Example: 2.45
     *
     * @return float
     */
    public function getRadioactiveTransportIndex() : float
    {
        return $this->radioactiveTransportIndex;
    }
    /**
     * Specifies the maximum radiation level from the package (measured in microSieverts per hour at a distance of one meter from the external surface of the package, divided by 10).<br>Example: 2.45
     *
     * @param float $radioactiveTransportIndex
     *
     * @return self
     */
    public function setRadioactiveTransportIndex(float $radioactiveTransportIndex) : self
    {
        $this->initialized['radioactiveTransportIndex'] = true;
        $this->radioactiveTransportIndex = $radioactiveTransportIndex;
        return $this;
    }
}