<?php

namespace AntibodiesOnline\FedEx\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsContentsItem extends \ArrayObject
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
     * Field holds the item number for the contents of shipment. <br> Example: RZ5678 
     *
     * @var string
     */
    protected $itemNumber;
    /**
     * Field which holds information about the quantity received. <br> Example: 13
     *
     * @var string
     */
    protected $receivedQuantity;
    /**
     * Field which holds informative description about shipment content. <br> Example:  pulyurethane rope
     *
     * @var string
     */
    protected $description;
    /**
     * Holds the part number of the content in shipment. <br> Example: RK1345
     *
     * @var string
     */
    protected $partNumber;
    /**
     * Field holds the item number for the contents of shipment. <br> Example: RZ5678 
     *
     * @return string
     */
    public function getItemNumber() : string
    {
        return $this->itemNumber;
    }
    /**
     * Field holds the item number for the contents of shipment. <br> Example: RZ5678 
     *
     * @param string $itemNumber
     *
     * @return self
     */
    public function setItemNumber(string $itemNumber) : self
    {
        $this->initialized['itemNumber'] = true;
        $this->itemNumber = $itemNumber;
        return $this;
    }
    /**
     * Field which holds information about the quantity received. <br> Example: 13
     *
     * @return string
     */
    public function getReceivedQuantity() : string
    {
        return $this->receivedQuantity;
    }
    /**
     * Field which holds information about the quantity received. <br> Example: 13
     *
     * @param string $receivedQuantity
     *
     * @return self
     */
    public function setReceivedQuantity(string $receivedQuantity) : self
    {
        $this->initialized['receivedQuantity'] = true;
        $this->receivedQuantity = $receivedQuantity;
        return $this;
    }
    /**
     * Field which holds informative description about shipment content. <br> Example:  pulyurethane rope
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Field which holds informative description about shipment content. <br> Example:  pulyurethane rope
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Holds the part number of the content in shipment. <br> Example: RK1345
     *
     * @return string
     */
    public function getPartNumber() : string
    {
        return $this->partNumber;
    }
    /**
     * Holds the part number of the content in shipment. <br> Example: RK1345
     *
     * @param string $partNumber
     *
     * @return self
     */
    public function setPartNumber(string $partNumber) : self
    {
        $this->initialized['partNumber'] = true;
        $this->partNumber = $partNumber;
        return $this;
    }
}