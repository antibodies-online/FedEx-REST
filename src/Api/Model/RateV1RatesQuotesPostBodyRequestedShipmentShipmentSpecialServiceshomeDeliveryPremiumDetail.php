<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetail extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicate the phone number. Only numeric values allowed.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber
     */
    protected $phoneNumber;
    /**
     * This is shipment date. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone.<br>Format: YYYY-MM-DD. <br>Example: 2019-06-26.
     *
     * @var string
     */
    protected $shipTimestamp;
    /**
     * This is Home Delivery Premium Type. It allows to specify additional premimum service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     *
     * @var string
     */
    protected $homedeliveryPremiumType;
    /**
     * Indicate the phone number. Only numeric values allowed.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber
     */
    public function getPhoneNumber(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber
    {
        return $this->phoneNumber;
    }
    /**
     * Indicate the phone number. Only numeric values allowed.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetailPhoneNumber $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * This is shipment date. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone.<br>Format: YYYY-MM-DD. <br>Example: 2019-06-26.
     *
     * @return string
     */
    public function getShipTimestamp(): string
    {
        return $this->shipTimestamp;
    }
    /**
     * This is shipment date. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone.<br>Format: YYYY-MM-DD. <br>Example: 2019-06-26.
     *
     * @param string $shipTimestamp
     *
     * @return self
     */
    public function setShipTimestamp(string $shipTimestamp): self
    {
        $this->initialized['shipTimestamp'] = true;
        $this->shipTimestamp = $shipTimestamp;
        return $this;
    }
    /**
     * This is Home Delivery Premium Type. It allows to specify additional premimum service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     *
     * @return string
     */
    public function getHomedeliveryPremiumType(): string
    {
        return $this->homedeliveryPremiumType;
    }
    /**
     * This is Home Delivery Premium Type. It allows to specify additional premimum service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     *
     * @param string $homedeliveryPremiumType
     *
     * @return self
     */
    public function setHomedeliveryPremiumType(string $homedeliveryPremiumType): self
    {
        $this->initialized['homedeliveryPremiumType'] = true;
        $this->homedeliveryPremiumType = $homedeliveryPremiumType;
        return $this;
    }
}