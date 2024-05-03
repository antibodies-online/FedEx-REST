<?php

namespace AntibodiesOnline\FedEx\Model;

class AvailabilityV1PackageandserviceoptionsPostResponse200OutputAdvancedRegulatoryPackagesItem extends \ArrayObject
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
     * Unique Key
     *
     * @var string
     */
    protected $key;
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
     * Unique Key
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * Unique Key
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
}