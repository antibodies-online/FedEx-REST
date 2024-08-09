<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostResponse200Output extends \ArrayObject
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
     * The alerts received when a Shipment Package Validate is processed. This includes the alert code, alert type, and alert message.
     *
     * @var list<ShipV1ShipmentsPackagesValidatePostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * The alerts received when a Shipment Package Validate is processed. This includes the alert code, alert type, and alert message.
     *
     * @return list<ShipV1ShipmentsPackagesValidatePostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The alerts received when a Shipment Package Validate is processed. This includes the alert code, alert type, and alert message.
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostResponse200OutputAlertsItem> $alerts
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