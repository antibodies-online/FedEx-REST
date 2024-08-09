<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemServiceDetail extends \ArrayObject
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
     * Field which holds the text description of the service type of this package.<br> Example: FedEx Freight Economy
     *
     * @var string
     */
    protected $description;
    /**
     * Field which holds the abbreviated text description of the service type of this package.<br> Example: FL
     *
     * @var string
     */
    protected $shortDescription;
    /**
     * This is the service type.<br> Example: FEDEX_FREIGHT_ECONOMY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @var string
     */
    protected $type;
    /**
     * Field which holds the text description of the service type of this package.<br> Example: FedEx Freight Economy
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Field which holds the text description of the service type of this package.<br> Example: FedEx Freight Economy
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
     * Field which holds the abbreviated text description of the service type of this package.<br> Example: FL
     *
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }
    /**
     * Field which holds the abbreviated text description of the service type of this package.<br> Example: FL
     *
     * @param string $shortDescription
     *
     * @return self
     */
    public function setShortDescription(string $shortDescription): self
    {
        $this->initialized['shortDescription'] = true;
        $this->shortDescription = $shortDescription;
        return $this;
    }
    /**
     * This is the service type.<br> Example: FEDEX_FREIGHT_ECONOMY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * This is the service type.<br> Example: FEDEX_FREIGHT_ECONOMY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}