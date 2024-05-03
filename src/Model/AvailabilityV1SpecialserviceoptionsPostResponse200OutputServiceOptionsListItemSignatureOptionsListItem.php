<?php

namespace AntibodiesOnline\FedEx\Model;

class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemSignatureOptionsListItem extends \ArrayObject
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
     * Display Text
     *
     * @var string
     */
    protected $displayText;
    /**
     * Unique code
     *
     * @var string
     */
    protected $code;
    /**
     * Display Text
     *
     * @return string
     */
    public function getDisplayText() : string
    {
        return $this->displayText;
    }
    /**
     * Display Text
     *
     * @param string $displayText
     *
     * @return self
     */
    public function setDisplayText(string $displayText) : self
    {
        $this->initialized['displayText'] = true;
        $this->displayText = $displayText;
        return $this;
    }
    /**
     * Unique code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Unique code
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
}