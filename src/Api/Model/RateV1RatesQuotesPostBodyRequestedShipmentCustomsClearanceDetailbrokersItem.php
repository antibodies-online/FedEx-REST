<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItem extends \ArrayObject
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
     * 
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBroker
     */
    protected $broker;
    /**
     * This is Broker Type.
     *
     * @var string
     */
    protected $type;
    /**
     * This is the delivery commitment date/time the shipment will arrive at the border. <br> Example: 2019-07-22
     *
     * @var string
     */
    protected $brokerCommitTimestamp;
    /**
     * This is the delivery commitment day of the week the shipment will arrive at the border. <br> Example: SUNDAY
     *
     * @var string
     */
    protected $brokerCommitDayOfWeek;
    /**
     * This is the FedEx location identifier for the broker. <br> Example: HKAA
     *
     * @var string
     */
    protected $brokerLocationId;
    /**
     * This is the broker address used for this shipment.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBrokerAddress
     */
    protected $brokerAddress;
    /**
     * These are number of days it will take for the shipment to make it from broker. <br> Example: 10
     *
     * @var int
     */
    protected $brokerToDestinationDays;
    /**
     * 
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBroker
     */
    public function getBroker() : RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBroker
    {
        return $this->broker;
    }
    /**
     * 
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBroker $broker
     *
     * @return self
     */
    public function setBroker(RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBroker $broker) : self
    {
        $this->initialized['broker'] = true;
        $this->broker = $broker;
        return $this;
    }
    /**
     * This is Broker Type.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * This is Broker Type.
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
     * This is the delivery commitment date/time the shipment will arrive at the border. <br> Example: 2019-07-22
     *
     * @return string
     */
    public function getBrokerCommitTimestamp() : string
    {
        return $this->brokerCommitTimestamp;
    }
    /**
     * This is the delivery commitment date/time the shipment will arrive at the border. <br> Example: 2019-07-22
     *
     * @param string $brokerCommitTimestamp
     *
     * @return self
     */
    public function setBrokerCommitTimestamp(string $brokerCommitTimestamp) : self
    {
        $this->initialized['brokerCommitTimestamp'] = true;
        $this->brokerCommitTimestamp = $brokerCommitTimestamp;
        return $this;
    }
    /**
     * This is the delivery commitment day of the week the shipment will arrive at the border. <br> Example: SUNDAY
     *
     * @return string
     */
    public function getBrokerCommitDayOfWeek() : string
    {
        return $this->brokerCommitDayOfWeek;
    }
    /**
     * This is the delivery commitment day of the week the shipment will arrive at the border. <br> Example: SUNDAY
     *
     * @param string $brokerCommitDayOfWeek
     *
     * @return self
     */
    public function setBrokerCommitDayOfWeek(string $brokerCommitDayOfWeek) : self
    {
        $this->initialized['brokerCommitDayOfWeek'] = true;
        $this->brokerCommitDayOfWeek = $brokerCommitDayOfWeek;
        return $this;
    }
    /**
     * This is the FedEx location identifier for the broker. <br> Example: HKAA
     *
     * @return string
     */
    public function getBrokerLocationId() : string
    {
        return $this->brokerLocationId;
    }
    /**
     * This is the FedEx location identifier for the broker. <br> Example: HKAA
     *
     * @param string $brokerLocationId
     *
     * @return self
     */
    public function setBrokerLocationId(string $brokerLocationId) : self
    {
        $this->initialized['brokerLocationId'] = true;
        $this->brokerLocationId = $brokerLocationId;
        return $this;
    }
    /**
     * This is the broker address used for this shipment.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBrokerAddress
     */
    public function getBrokerAddress() : RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBrokerAddress
    {
        return $this->brokerAddress;
    }
    /**
     * This is the broker address used for this shipment.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBrokerAddress $brokerAddress
     *
     * @return self
     */
    public function setBrokerAddress(RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailbrokersItemBrokerAddress $brokerAddress) : self
    {
        $this->initialized['brokerAddress'] = true;
        $this->brokerAddress = $brokerAddress;
        return $this;
    }
    /**
     * These are number of days it will take for the shipment to make it from broker. <br> Example: 10
     *
     * @return int
     */
    public function getBrokerToDestinationDays() : int
    {
        return $this->brokerToDestinationDays;
    }
    /**
     * These are number of days it will take for the shipment to make it from broker. <br> Example: 10
     *
     * @param int $brokerToDestinationDays
     *
     * @return self
     */
    public function setBrokerToDestinationDays(int $brokerToDestinationDays) : self
    {
        $this->initialized['brokerToDestinationDays'] = true;
        $this->brokerToDestinationDays = $brokerToDestinationDays;
        return $this;
    }
}