<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryCountryAdvisoriesMessagesItemParametersItem extends \ArrayObject
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
     * Specifies the advisory ids.
     *
     * @var string
     */
    protected $id;
    /**
     * Specifies the advisory regulation.
     *
     * @var string
     */
    protected $value;
    /**
     * Specifies the advisory ids.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Specifies the advisory ids.
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
     * Specifies the advisory regulation.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Specifies the advisory regulation.
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