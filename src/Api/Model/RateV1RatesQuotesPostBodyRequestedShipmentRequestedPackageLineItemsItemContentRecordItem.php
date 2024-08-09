<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemContentRecordItem extends \ArrayObject
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
     * Specifies Item Number.
     *
     * @var string
     */
    protected $itemNumber;
    /**
     * Specifies Received Quantity.
     *
     * @var int
     */
    protected $receivedQuantity;
    /**
     * Specifies description for the content record.
     *
     * @var string
     */
    protected $description;
    /**
     * Specifies Part Number.
     *
     * @var string
     */
    protected $partNumber;
    /**
     * Specifies Item Number.
     *
     * @return string
     */
    public function getItemNumber(): string
    {
        return $this->itemNumber;
    }
    /**
     * Specifies Item Number.
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
     * Specifies Received Quantity.
     *
     * @return int
     */
    public function getReceivedQuantity(): int
    {
        return $this->receivedQuantity;
    }
    /**
     * Specifies Received Quantity.
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
     * Specifies description for the content record.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Specifies description for the content record.
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
     * Specifies Part Number.
     *
     * @return string
     */
    public function getPartNumber(): string
    {
        return $this->partNumber;
    }
    /**
     * Specifies Part Number.
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