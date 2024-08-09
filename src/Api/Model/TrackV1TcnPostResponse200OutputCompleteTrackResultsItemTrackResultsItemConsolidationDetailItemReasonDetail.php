<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemConsolidationDetailItemReasonDetail extends \ArrayObject
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
     * Field which holds the reason description. <br> Example: Wrong color
     *
     * @var string
     */
    protected $description;
    /**
     * Field which holds the reason type.<br> Example: REJECTED
     *
     * @var string
     */
    protected $type;
    /**
     * Field which holds the reason description. <br> Example: Wrong color
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Field which holds the reason description. <br> Example: Wrong color
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
     * Field which holds the reason type.<br> Example: REJECTED
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Field which holds the reason type.<br> Example: REJECTED
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