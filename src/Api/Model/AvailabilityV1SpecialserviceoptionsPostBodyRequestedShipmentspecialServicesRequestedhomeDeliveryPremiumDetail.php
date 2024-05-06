<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedhomeDeliveryPremiumDetail extends \ArrayObject
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
     *  This is Home Delivery Premium Type. It allows to specify additional premium service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     *
     * @var string
     */
    protected $homedeliveryPremiumType;
    /**
     *  This is Home Delivery Premium Type. It allows to specify additional premium service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     *
     * @return string
     */
    public function getHomedeliveryPremiumType() : string
    {
        return $this->homedeliveryPremiumType;
    }
    /**
     *  This is Home Delivery Premium Type. It allows to specify additional premium service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     *
     * @param string $homedeliveryPremiumType
     *
     * @return self
     */
    public function setHomedeliveryPremiumType(string $homedeliveryPremiumType) : self
    {
        $this->initialized['homedeliveryPremiumType'] = true;
        $this->homedeliveryPremiumType = $homedeliveryPremiumType;
        return $this;
    }
}