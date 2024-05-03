<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsCancelPutResponse200Output extends \ArrayObject
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
     * Indicates whether the shipment has been cancelled or not. If the value is True, then it indicates that the shipment has been cancelled.<br>Example: true
     *
     * @var bool
     */
    protected $cancelledShipment;
    /**
     * Indicates whether the shipment has been deleted from history or not. If the value is True, then it indicates that the shipment has been deleted.<br>Example: true
     *
     * @var bool
     */
    protected $cancelledHistory;
    /**
     * The success message generated during cancellation request for Shipment.<br>Example: Success
     *
     * @var string
     */
    protected $successMessage;
    /**
     * This is a cancellation request alert. This alert includes information such as alert code, alert type, and alert message.
     *
     * @var list<ShipV1ShipmentsCancelPutResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Indicates whether the shipment has been cancelled or not. If the value is True, then it indicates that the shipment has been cancelled.<br>Example: true
     *
     * @return bool
     */
    public function getCancelledShipment() : bool
    {
        return $this->cancelledShipment;
    }
    /**
     * Indicates whether the shipment has been cancelled or not. If the value is True, then it indicates that the shipment has been cancelled.<br>Example: true
     *
     * @param bool $cancelledShipment
     *
     * @return self
     */
    public function setCancelledShipment(bool $cancelledShipment) : self
    {
        $this->initialized['cancelledShipment'] = true;
        $this->cancelledShipment = $cancelledShipment;
        return $this;
    }
    /**
     * Indicates whether the shipment has been deleted from history or not. If the value is True, then it indicates that the shipment has been deleted.<br>Example: true
     *
     * @return bool
     */
    public function getCancelledHistory() : bool
    {
        return $this->cancelledHistory;
    }
    /**
     * Indicates whether the shipment has been deleted from history or not. If the value is True, then it indicates that the shipment has been deleted.<br>Example: true
     *
     * @param bool $cancelledHistory
     *
     * @return self
     */
    public function setCancelledHistory(bool $cancelledHistory) : self
    {
        $this->initialized['cancelledHistory'] = true;
        $this->cancelledHistory = $cancelledHistory;
        return $this;
    }
    /**
     * The success message generated during cancellation request for Shipment.<br>Example: Success
     *
     * @return string
     */
    public function getSuccessMessage() : string
    {
        return $this->successMessage;
    }
    /**
     * The success message generated during cancellation request for Shipment.<br>Example: Success
     *
     * @param string $successMessage
     *
     * @return self
     */
    public function setSuccessMessage(string $successMessage) : self
    {
        $this->initialized['successMessage'] = true;
        $this->successMessage = $successMessage;
        return $this;
    }
    /**
     * This is a cancellation request alert. This alert includes information such as alert code, alert type, and alert message.
     *
     * @return list<ShipV1ShipmentsCancelPutResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * This is a cancellation request alert. This alert includes information such as alert code, alert type, and alert message.
     *
     * @param list<ShipV1ShipmentsCancelPutResponse200OutputAlertsItem> $alerts
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