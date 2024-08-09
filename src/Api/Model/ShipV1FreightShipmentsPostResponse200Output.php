<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostResponse200Output extends \ArrayObject
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
     * The shipping transaction details, such as master tracking number, service type, and ship timestamp.
     *
     * @var list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItem>
     */
    protected $transactionShipments;
    /**
     * The alerts received when a freightShipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @var list<ShipV1FreightShipmentsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * The shipping transaction details, such as master tracking number, service type, and ship timestamp.
     *
     * @return list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItem>
     */
    public function getTransactionShipments(): array
    {
        return $this->transactionShipments;
    }
    /**
     * The shipping transaction details, such as master tracking number, service type, and ship timestamp.
     *
     * @param list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItem> $transactionShipments
     *
     * @return self
     */
    public function setTransactionShipments(array $transactionShipments): self
    {
        $this->initialized['transactionShipments'] = true;
        $this->transactionShipments = $transactionShipments;
        return $this;
    }
    /**
     * The alerts received when a freightShipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @return list<ShipV1FreightShipmentsPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The alerts received when a freightShipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @param list<ShipV1FreightShipmentsPostResponse200OutputAlertsItem> $alerts
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