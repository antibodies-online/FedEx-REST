<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailRegulatoryLabelsItem extends \ArrayObject
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
     * Specify the regulatory content preference to be displayed on the label.
     *
     * @var string
     */
    protected $generationOptions;
    /**
     * Specify the type of regulatory content to be added on the label.
     *
     * @var string
     */
    protected $type;
    /**
     * Specify the regulatory content preference to be displayed on the label.
     *
     * @return string
     */
    public function getGenerationOptions() : string
    {
        return $this->generationOptions;
    }
    /**
     * Specify the regulatory content preference to be displayed on the label.
     *
     * @param string $generationOptions
     *
     * @return self
     */
    public function setGenerationOptions(string $generationOptions) : self
    {
        $this->initialized['generationOptions'] = true;
        $this->generationOptions = $generationOptions;
        return $this;
    }
    /**
     * Specify the type of regulatory content to be added on the label.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Specify the type of regulatory content to be added on the label.
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
}