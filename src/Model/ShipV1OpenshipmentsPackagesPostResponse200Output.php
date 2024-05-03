<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPostResponse200Output extends \ArrayObject
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
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @var list<ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItem>
     */
    protected $transactionShipments;
    /**
     * The alerts received when a shipShipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @var list<ShipV1OpenshipmentsPackagesPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @return list<ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItem>
     */
    public function getTransactionShipments() : array
    {
        return $this->transactionShipments;
    }
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @param list<ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItem> $transactionShipments
     *
     * @return self
     */
    public function setTransactionShipments(array $transactionShipments) : self
    {
        $this->initialized['transactionShipments'] = true;
        $this->transactionShipments = $transactionShipments;
        return $this;
    }
    /**
     * The alerts received when a shipShipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @return list<ShipV1OpenshipmentsPackagesPostResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * The alerts received when a shipShipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @param list<ShipV1OpenshipmentsPackagesPostResponse200OutputAlertsItem> $alerts
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