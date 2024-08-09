<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItemAlertListItem extends \ArrayObject
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
     * Display Text
     *
     * @var mixed
     */
    protected $displayText;
    /**
     * Unique Key
     *
     * @var mixed
     */
    protected $key;
    /**
     * Display Text
     *
     * @return mixed
     */
    public function getDisplayText()
    {
        return $this->displayText;
    }
    /**
     * Display Text
     *
     * @param mixed $displayText
     *
     * @return self
     */
    public function setDisplayText($displayText): self
    {
        $this->initialized['displayText'] = true;
        $this->displayText = $displayText;
        return $this;
    }
    /**
     * Unique Key
     *
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Unique Key
     *
     * @param mixed $key
     *
     * @return self
     */
    public function setKey($key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
}