<?php

namespace AntibodiesOnline\FedEx\Model;

class PickupV1FreightPickupsCancelPutResponse200Output extends \ArrayObject
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
     * This is the Pickup confirmation code. <br> Example: XXXX1007MEM62XXXX
     *
     * @var string
     */
    protected $pickupConfirmationCode;
    /**
     * Indicates the confirmation message for cancelled pickup.<br> Example: Requested pickup has been cancelled Successfully.
     *
     * @var string
     */
    protected $cancelConfirmationMessage;
    /**
     * Optional alerts received when a cancel pickup is requested. This includes an alert code, type, and message.
     *
     * @var list<PickupV1FreightPickupsCancelPutResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * This is the Pickup confirmation code. <br> Example: XXXX1007MEM62XXXX
     *
     * @return string
     */
    public function getPickupConfirmationCode() : string
    {
        return $this->pickupConfirmationCode;
    }
    /**
     * This is the Pickup confirmation code. <br> Example: XXXX1007MEM62XXXX
     *
     * @param string $pickupConfirmationCode
     *
     * @return self
     */
    public function setPickupConfirmationCode(string $pickupConfirmationCode) : self
    {
        $this->initialized['pickupConfirmationCode'] = true;
        $this->pickupConfirmationCode = $pickupConfirmationCode;
        return $this;
    }
    /**
     * Indicates the confirmation message for cancelled pickup.<br> Example: Requested pickup has been cancelled Successfully.
     *
     * @return string
     */
    public function getCancelConfirmationMessage() : string
    {
        return $this->cancelConfirmationMessage;
    }
    /**
     * Indicates the confirmation message for cancelled pickup.<br> Example: Requested pickup has been cancelled Successfully.
     *
     * @param string $cancelConfirmationMessage
     *
     * @return self
     */
    public function setCancelConfirmationMessage(string $cancelConfirmationMessage) : self
    {
        $this->initialized['cancelConfirmationMessage'] = true;
        $this->cancelConfirmationMessage = $cancelConfirmationMessage;
        return $this;
    }
    /**
     * Optional alerts received when a cancel pickup is requested. This includes an alert code, type, and message.
     *
     * @return list<PickupV1FreightPickupsCancelPutResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * Optional alerts received when a cancel pickup is requested. This includes an alert code, type, and message.
     *
     * @param list<PickupV1FreightPickupsCancelPutResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts) : self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}