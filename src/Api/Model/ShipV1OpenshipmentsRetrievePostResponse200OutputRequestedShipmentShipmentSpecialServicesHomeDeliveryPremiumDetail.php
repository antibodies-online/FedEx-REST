<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail extends \ArrayObject
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
     * Indicate the phone number. Only numeric values allowed.<br> Note that phoneNumber is mandatory when homedeliveryPremiumType is DATE_CERTAIN or EVENING.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber
     */
    protected $phoneNumber;
    /**
     * This is delivery date. Required for FedEx Date Certain Home Delivery. Valid dates are Monday to Sunday. <br>There may be a delay in delivery on Sundays to locations that are geographically difficult to access.<br>Example: 2019-06-26
     *
     * @var string
     */
    protected $deliveryDate;
    /**
     * This is Home Delivery Premium Type. It allows to specify additional premimum service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     *
     * @var string
     */
    protected $homedeliveryPremiumType;
    /**
     * Indicate the phone number. Only numeric values allowed.<br> Note that phoneNumber is mandatory when homedeliveryPremiumType is DATE_CERTAIN or EVENING.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber
     */
    public function getPhoneNumber(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber
    {
        return $this->phoneNumber;
    }
    /**
     * Indicate the phone number. Only numeric values allowed.<br> Note that phoneNumber is mandatory when homedeliveryPremiumType is DATE_CERTAIN or EVENING.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * This is delivery date. Required for FedEx Date Certain Home Delivery. Valid dates are Monday to Sunday. <br>There may be a delay in delivery on Sundays to locations that are geographically difficult to access.<br>Example: 2019-06-26
     *
     * @return string
     */
    public function getDeliveryDate(): string
    {
        return $this->deliveryDate;
    }
    /**
     * This is delivery date. Required for FedEx Date Certain Home Delivery. Valid dates are Monday to Sunday. <br>There may be a delay in delivery on Sundays to locations that are geographically difficult to access.<br>Example: 2019-06-26
     *
     * @param string $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(string $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
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