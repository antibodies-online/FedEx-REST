<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions extends \ArrayObject
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
     * Specifies the options.<br>Example: ["options"]
     *
     * @var list<string>
     */
    protected $options;
    /**
     * Specifies the options.<br>Example: ["options"]
     *
     * @return list<string>
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * Specifies the options.<br>Example: ["options"]
     *
     * @param list<string> $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}