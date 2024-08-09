<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemContentRecordItem extends \ArrayObject
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
     * This is a package item number.
     *
     * @var string
     */
    protected $itemNumber;
    /**
     * This is the package item quantity.
     *
     * @var int
     */
    protected $receivedQuantity;
    /**
     * This is the description of the package item.
     *
     * @var string
     */
    protected $description;
    /**
     * This is the part number.
     *
     * @var string
     */
    protected $partNumber;
    /**
     * This is a package item number.
     *
     * @return string
     */
    public function getItemNumber(): string
    {
        return $this->itemNumber;
    }
    /**
     * This is a package item number.
     *
     * @param string $itemNumber
     *
     * @return self
     */
    public function setItemNumber(string $itemNumber): self
    {
        $this->initialized['itemNumber'] = true;
        $this->itemNumber = $itemNumber;
        return $this;
    }
    /**
     * This is the package item quantity.
     *
     * @return int
     */
    public function getReceivedQuantity(): int
    {
        return $this->receivedQuantity;
    }
    /**
     * This is the package item quantity.
     *
     * @param int $receivedQuantity
     *
     * @return self
     */
    public function setReceivedQuantity(int $receivedQuantity): self
    {
        $this->initialized['receivedQuantity'] = true;
        $this->receivedQuantity = $receivedQuantity;
        return $this;
    }
    /**
     * This is the description of the package item.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * This is the description of the package item.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * This is the part number.
     *
     * @return string
     */
    public function getPartNumber(): string
    {
        return $this->partNumber;
    }
    /**
     * This is the part number.
     *
     * @param string $partNumber
     *
     * @return self
     */
    public function setPartNumber(string $partNumber): self
    {
        $this->initialized['partNumber'] = true;
        $this->partNumber = $partNumber;
        return $this;
    }
}