<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsContentsItem extends \ArrayObject
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
     * Field holds the item number for the contents of shipment. <br> Example: RZ5678.
     *
     * @var string
     */
    protected $itemNumber;
    /**
     * Field which holds information about the quantity received. <br> Example: 13.
     *
     * @var string
     */
    protected $receivedQuantity;
    /**
     * Field which holds informative description about shipment content. <br> Example:  pulyurethane rope.
     *
     * @var string
     */
    protected $description;
    /**
     * Holds the part number of the content in shipment. <br> Example: RK1345.
     *
     * @var string
     */
    protected $partNumber;

    /**
     * Field holds the item number for the contents of shipment. <br> Example: RZ5678.
     */
    public function getItemNumber(): string
    {
        return $this->itemNumber;
    }

    /**
     * Field holds the item number for the contents of shipment. <br> Example: RZ5678.
     */
    public function setItemNumber(string $itemNumber): self
    {
        $this->initialized['itemNumber'] = true;
        $this->itemNumber = $itemNumber;

        return $this;
    }

    /**
     * Field which holds information about the quantity received. <br> Example: 13.
     */
    public function getReceivedQuantity(): string
    {
        return $this->receivedQuantity;
    }

    /**
     * Field which holds information about the quantity received. <br> Example: 13.
     */
    public function setReceivedQuantity(string $receivedQuantity): self
    {
        $this->initialized['receivedQuantity'] = true;
        $this->receivedQuantity = $receivedQuantity;

        return $this;
    }

    /**
     * Field which holds informative description about shipment content. <br> Example:  pulyurethane rope.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Field which holds informative description about shipment content. <br> Example:  pulyurethane rope.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Holds the part number of the content in shipment. <br> Example: RK1345.
     */
    public function getPartNumber(): string
    {
        return $this->partNumber;
    }

    /**
     * Holds the part number of the content in shipment. <br> Example: RK1345.
     */
    public function setPartNumber(string $partNumber): self
    {
        $this->initialized['partNumber'] = true;
        $this->partNumber = $partNumber;

        return $this;
    }
}