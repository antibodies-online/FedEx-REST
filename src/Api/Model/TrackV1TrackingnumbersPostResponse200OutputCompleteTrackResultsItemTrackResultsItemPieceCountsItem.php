<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPieceCountsItem extends \ArrayObject
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
     * Field which holds the piece count. <br> Example: 35
     *
     * @var string
     */
    protected $count;
    /**
     * Field which holds the piece count description detail. <br> Example: picec count description
     *
     * @var string
     */
    protected $description;
    /**
     * Field which holds the piece count location type. <br> Example: ORIGIN
     *
     * @var string
     */
    protected $type;
    /**
     * Field which holds the piece count. <br> Example: 35
     *
     * @return string
     */
    public function getCount(): string
    {
        return $this->count;
    }
    /**
     * Field which holds the piece count. <br> Example: 35
     *
     * @param string $count
     *
     * @return self
     */
    public function setCount(string $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Field which holds the piece count description detail. <br> Example: picec count description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Field which holds the piece count description detail. <br> Example: picec count description
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
     * Field which holds the piece count location type. <br> Example: ORIGIN
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Field which holds the piece count location type. <br> Example: ORIGIN
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