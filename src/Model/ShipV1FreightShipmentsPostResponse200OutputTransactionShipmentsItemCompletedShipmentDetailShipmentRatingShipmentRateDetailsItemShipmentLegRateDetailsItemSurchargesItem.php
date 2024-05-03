<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemSurchargesItem extends \ArrayObject
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
     * This is the surcharge amount.<br>Example: 15.35
     *
     * @var mixed
     */
    protected $amount;
    /**
     * This is the surcharge type.<br>Example: APPOINTMENT_DELIVERY
     *
     * @var string
     */
    protected $surchargeType;
    /**
     * Specifies if the surcharge applies to the entire shipment, or to an individual package.<br>Example: PACKAGE
     *
     * @var string
     */
    protected $level;
    /**
     * Specifies the description for the surcharge.
     *
     * @var string
     */
    protected $description;
    /**
     * This is the surcharge amount.<br>Example: 15.35
     *
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * This is the surcharge amount.<br>Example: 15.35
     *
     * @param mixed $amount
     *
     * @return self
     */
    public function setAmount($amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * This is the surcharge type.<br>Example: APPOINTMENT_DELIVERY
     *
     * @return string
     */
    public function getSurchargeType() : string
    {
        return $this->surchargeType;
    }
    /**
     * This is the surcharge type.<br>Example: APPOINTMENT_DELIVERY
     *
     * @param string $surchargeType
     *
     * @return self
     */
    public function setSurchargeType(string $surchargeType) : self
    {
        $this->initialized['surchargeType'] = true;
        $this->surchargeType = $surchargeType;
        return $this;
    }
    /**
     * Specifies if the surcharge applies to the entire shipment, or to an individual package.<br>Example: PACKAGE
     *
     * @return string
     */
    public function getLevel() : string
    {
        return $this->level;
    }
    /**
     * Specifies if the surcharge applies to the entire shipment, or to an individual package.<br>Example: PACKAGE
     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(string $level) : self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * Specifies the description for the surcharge.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Specifies the description for the surcharge.
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
}