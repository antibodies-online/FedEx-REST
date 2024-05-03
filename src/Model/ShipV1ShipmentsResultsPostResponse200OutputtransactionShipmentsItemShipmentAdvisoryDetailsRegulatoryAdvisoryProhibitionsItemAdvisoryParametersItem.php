<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisoryParametersItem extends \ArrayObject
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
     * Specifies the message parameter code.<br>Example: message ID
     *
     * @var string
     */
    protected $id;
    /**
     * Specifies the message parameter value of the code.<br>Example: value
     *
     * @var string
     */
    protected $value;
    /**
     * Specifies the message parameter code.<br>Example: message ID
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Specifies the message parameter code.<br>Example: message ID
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Specifies the message parameter value of the code.<br>Example: value
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Specifies the message parameter value of the code.<br>Example: value
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