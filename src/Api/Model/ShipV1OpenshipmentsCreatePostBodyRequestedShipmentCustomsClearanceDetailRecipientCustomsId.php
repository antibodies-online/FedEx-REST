<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId extends \ArrayObject
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
     * This is ID Type.
     *
     * @var string
     */
    protected $type;
    /**
     * This is the ID number.
     *
     * @var string
     */
    protected $value;
    /**
     * This is ID Type.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * This is ID Type.
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
    /**
     * This is the ID number.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * This is the ID number.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}