<?php

namespace AntibodiesOnline\FedEx\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemPackageDetailsDeclaredValue extends \ArrayObject
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
     * Indicate the currency code.<br> Example: USD<br><a onclick='loadDocReference("countrycodes")'>Click here to see Currency Codes</a>
     *
     * @var string
     */
    protected $currency;
    /**
     * Field which holds the amount value. <br> Example: 56.80
     *
     * @var float
     */
    protected $value;
    /**
     * Indicate the currency code.<br> Example: USD<br><a onclick='loadDocReference("countrycodes")'>Click here to see Currency Codes</a>
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * Indicate the currency code.<br> Example: USD<br><a onclick='loadDocReference("countrycodes")'>Click here to see Currency Codes</a>
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * Field which holds the amount value. <br> Example: 56.80
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * Field which holds the amount value. <br> Example: 56.80
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}