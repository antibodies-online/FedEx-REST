<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryCommodityClarificationsItemSuggestionsItem extends \ArrayObject
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
     * This is a suggested commodity description.<br>Example: Commodity
     *
     * @var string
     */
    protected $description;
    /**
     * Specify the harmonized code.<br>Example: XXX12
     *
     * @var string
     */
    protected $harmonizedCode;
    /**
     * This is a suggested commodity description.<br>Example: Commodity
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * This is a suggested commodity description.<br>Example: Commodity
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
    /**
     * Specify the harmonized code.<br>Example: XXX12
     *
     * @return string
     */
    public function getHarmonizedCode() : string
    {
        return $this->harmonizedCode;
    }
    /**
     * Specify the harmonized code.<br>Example: XXX12
     *
     * @param string $harmonizedCode
     *
     * @return self
     */
    public function setHarmonizedCode(string $harmonizedCode) : self
    {
        $this->initialized['harmonizedCode'] = true;
        $this->harmonizedCode = $harmonizedCode;
        return $this;
    }
}