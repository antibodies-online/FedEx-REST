<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostResponse200Output extends \ArrayObject
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
     * The confirmation number provided to the customer when a freight pickup is requested. <br> Example : XXXX101XXOS45XXXX
     *
     * @var string
     */
    protected $pickupConfirmationCode;
    /**
     * These are optional alerts received when a Create freight pickup is requested. This includes an alert code, type, and message.
     *
     * @var list<PickupV1FreightPickupsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * The confirmation number provided to the customer when a freight pickup is requested. <br> Example : XXXX101XXOS45XXXX
     *
     * @return string
     */
    public function getPickupConfirmationCode(): string
    {
        return $this->pickupConfirmationCode;
    }
    /**
     * The confirmation number provided to the customer when a freight pickup is requested. <br> Example : XXXX101XXOS45XXXX
     *
     * @param string $pickupConfirmationCode
     *
     * @return self
     */
    public function setPickupConfirmationCode(string $pickupConfirmationCode): self
    {
        $this->initialized['pickupConfirmationCode'] = true;
        $this->pickupConfirmationCode = $pickupConfirmationCode;
        return $this;
    }
    /**
     * These are optional alerts received when a Create freight pickup is requested. This includes an alert code, type, and message.
     *
     * @return list<PickupV1FreightPickupsPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * These are optional alerts received when a Create freight pickup is requested. This includes an alert code, type, and message.
     *
     * @param list<PickupV1FreightPickupsPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}