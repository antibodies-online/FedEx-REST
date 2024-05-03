<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemAvailableImagesItem extends \ArrayObject
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
     * Field which holds the size of available images for the shipment being tracked. Example: LARGE
     *
     * @var string
     */
    protected $size;
    /**
     * Field which holds the type of available images for the shipment being tracked.<br> Example: BILL_OF_LADING
     *
     * @var string
     */
    protected $type;
    /**
     * Field which holds the size of available images for the shipment being tracked. Example: LARGE
     *
     * @return string
     */
    public function getSize() : string
    {
        return $this->size;
    }
    /**
     * Field which holds the size of available images for the shipment being tracked. Example: LARGE
     *
     * @param string $size
     *
     * @return self
     */
    public function setSize(string $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * Field which holds the type of available images for the shipment being tracked.<br> Example: BILL_OF_LADING
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Field which holds the type of available images for the shipment being tracked.<br> Example: BILL_OF_LADING
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}