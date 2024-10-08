<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesBatteryDetails extends \ArrayObject
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
     * Describes the material composition of the battery or cell.
     *
     * @var string
     */
    protected $batteryMaterialType;
    /**
     * Describes the packing arrangement of the battery or cell with respect to other items within the same package.
     *
     * @var string
     */
    protected $batteryPackingType;
    /**
     * A regulation specific classification for the battery or cell.
     *
     * @var string
     */
    protected $batteryRegulatoryType;
    /**
     * Describes the material composition of the battery or cell.
     *
     * @return string
     */
    public function getBatteryMaterialType(): string
    {
        return $this->batteryMaterialType;
    }
    /**
     * Describes the material composition of the battery or cell.
     *
     * @param string $batteryMaterialType
     *
     * @return self
     */
    public function setBatteryMaterialType(string $batteryMaterialType): self
    {
        $this->initialized['batteryMaterialType'] = true;
        $this->batteryMaterialType = $batteryMaterialType;
        return $this;
    }
    /**
     * Describes the packing arrangement of the battery or cell with respect to other items within the same package.
     *
     * @return string
     */
    public function getBatteryPackingType(): string
    {
        return $this->batteryPackingType;
    }
    /**
     * Describes the packing arrangement of the battery or cell with respect to other items within the same package.
     *
     * @param string $batteryPackingType
     *
     * @return self
     */
    public function setBatteryPackingType(string $batteryPackingType): self
    {
        $this->initialized['batteryPackingType'] = true;
        $this->batteryPackingType = $batteryPackingType;
        return $this;
    }
    /**
     * A regulation specific classification for the battery or cell.
     *
     * @return string
     */
    public function getBatteryRegulatoryType(): string
    {
        return $this->batteryRegulatoryType;
    }
    /**
     * A regulation specific classification for the battery or cell.
     *
     * @param string $batteryRegulatoryType
     *
     * @return self
     */
    public function setBatteryRegulatoryType(string $batteryRegulatoryType): self
    {
        $this->initialized['batteryRegulatoryType'] = true;
        $this->batteryRegulatoryType = $batteryRegulatoryType;
        return $this;
    }
}