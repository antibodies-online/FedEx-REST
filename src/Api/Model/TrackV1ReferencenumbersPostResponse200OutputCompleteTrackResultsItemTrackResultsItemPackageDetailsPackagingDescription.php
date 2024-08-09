<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsPackagingDescription extends \ArrayObject
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
     * Indicate the packaging type description.<br> Example: FedEx Pak
     *
     * @var string
     */
    protected $description;
    /**
     * Indicate the packaging type.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @var string
     */
    protected $type;
    /**
     * Indicate the packaging type description.<br> Example: FedEx Pak
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Indicate the packaging type description.<br> Example: FedEx Pak
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
     * Indicate the packaging type.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Indicate the packaging type.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
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