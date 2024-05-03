<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailServiceDescriptionNamesItem extends \ArrayObject
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
     * The type of name (long, medium, short, etc.) to which this value refers.<br>Example: long
     *
     * @var string
     */
    protected $type;
    /**
     * The character encoding used to represent this product name. <br>Example: UTF-8
     *
     * @var string
     */
    protected $encoding;
    /**
     * Specifies the value of the Product.<br>Example: F-2
     *
     * @var string
     */
    protected $value;
    /**
     * The type of name (long, medium, short, etc.) to which this value refers.<br>Example: long
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of name (long, medium, short, etc.) to which this value refers.<br>Example: long
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
     * The character encoding used to represent this product name. <br>Example: UTF-8
     *
     * @return string
     */
    public function getEncoding() : string
    {
        return $this->encoding;
    }
    /**
     * The character encoding used to represent this product name. <br>Example: UTF-8
     *
     * @param string $encoding
     *
     * @return self
     */
    public function setEncoding(string $encoding) : self
    {
        $this->initialized['encoding'] = true;
        $this->encoding = $encoding;
        return $this;
    }
    /**
     * Specifies the value of the Product.<br>Example: F-2
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Specifies the value of the Product.<br>Example: F-2
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