<?php

namespace AntibodiesOnline\FedEx\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemInformationNotesItem extends \ArrayObject
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
     * Field which holds the code that designates the type of informational message being returned. <br>Example: 'CLEARANCE_ENTRY_FEE_APPLIES'
     *
     * @var string
     */
    protected $code;
    /**
     * Field which holds the The informational message in human readable form.<br> Example: this is an informational message
     *
     * @var string
     */
    protected $description;
    /**
     * Field which holds the code that designates the type of informational message being returned. <br>Example: 'CLEARANCE_ENTRY_FEE_APPLIES'
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Field which holds the code that designates the type of informational message being returned. <br>Example: 'CLEARANCE_ENTRY_FEE_APPLIES'
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Field which holds the The informational message in human readable form.<br> Example: this is an informational message
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Field which holds the The informational message in human readable form.<br> Example: this is an informational message
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
}