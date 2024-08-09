<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightGuaranteeDetail extends \ArrayObject
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
     * Specified the time <br>Example: 10:00
     *
     * @var string
     */
    protected $time;
    /**
     * Specified the time <br>Example: 10:00
     *
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }
    /**
     * Specified the time <br>Example: 10:00
     *
     * @param string $time
     *
     * @return self
     */
    public function setTime(string $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
}