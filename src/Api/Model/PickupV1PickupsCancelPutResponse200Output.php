<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsCancelPutResponse200Output extends \ArrayObject
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
     * Specify the pickup confirmation code. <br> Example: NQAA97
     *
     * @var string
     */
    protected $pickupConfirmationCode;
    /**
     * Indicates a cancelled pickup confirmation message.<br> Example: Requested pickup has been cancelled successfully.
     *
     * @var string
     */
    protected $cancelConfirmationMessage;
    /**
     * Optional alerts received when a cancel pickup is requested. This includes an alert code, type, and message.
     *
     * @var list<PickupV1PickupsCancelPutResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Specify the pickup confirmation code. <br> Example: NQAA97
     *
     * @return string
     */
    public function getPickupConfirmationCode(): string
    {
        return $this->pickupConfirmationCode;
    }
    /**
     * Specify the pickup confirmation code. <br> Example: NQAA97
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
     * Indicates a cancelled pickup confirmation message.<br> Example: Requested pickup has been cancelled successfully.
     *
     * @return string
     */
    public function getCancelConfirmationMessage(): string
    {
        return $this->cancelConfirmationMessage;
    }
    /**
     * Indicates a cancelled pickup confirmation message.<br> Example: Requested pickup has been cancelled successfully.
     *
     * @param string $cancelConfirmationMessage
     *
     * @return self
     */
    public function setCancelConfirmationMessage(string $cancelConfirmationMessage): self
    {
        $this->initialized['cancelConfirmationMessage'] = true;
        $this->cancelConfirmationMessage = $cancelConfirmationMessage;
        return $this;
    }
    /**
     * Optional alerts received when a cancel pickup is requested. This includes an alert code, type, and message.
     *
     * @return list<PickupV1PickupsCancelPutResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * Optional alerts received when a cancel pickup is requested. This includes an alert code, type, and message.
     *
     * @param list<PickupV1PickupsCancelPutResponse200OutputAlertsItem> $alerts
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