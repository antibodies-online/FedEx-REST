<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesbatteryDetailsItem extends \ArrayObject
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
     * Specify the material composition of the battery or cell.
     *
     * @var string
     */
    protected $material;
    /**
     * Specify the regulation specific classification for the battery or cell.
     *
     * @var string
     */
    protected $regulatorySubType;
    /**
     * Indicate the packing arrangement of the battery or cell with respect to other items within the same package.
     *
     * @var string
     */
    protected $packing;
    /**
     * Specify the material composition of the battery or cell.
     *
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }
    /**
     * Specify the material composition of the battery or cell.
     *
     * @param string $material
     *
     * @return self
     */
    public function setMaterial(string $material): self
    {
        $this->initialized['material'] = true;
        $this->material = $material;
        return $this;
    }
    /**
     * Specify the regulation specific classification for the battery or cell.
     *
     * @return string
     */
    public function getRegulatorySubType(): string
    {
        return $this->regulatorySubType;
    }
    /**
     * Specify the regulation specific classification for the battery or cell.
     *
     * @param string $regulatorySubType
     *
     * @return self
     */
    public function setRegulatorySubType(string $regulatorySubType): self
    {
        $this->initialized['regulatorySubType'] = true;
        $this->regulatorySubType = $regulatorySubType;
        return $this;
    }
    /**
     * Indicate the packing arrangement of the battery or cell with respect to other items within the same package.
     *
     * @return string
     */
    public function getPacking(): string
    {
        return $this->packing;
    }
    /**
     * Indicate the packing arrangement of the battery or cell with respect to other items within the same package.
     *
     * @param string $packing
     *
     * @return self
     */
    public function setPacking(string $packing): self
    {
        $this->initialized['packing'] = true;
        $this->packing = $packing;
        return $this;
    }
}