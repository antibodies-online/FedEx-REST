<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200Output extends \ArrayObject
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
     * The descriptive data for the requested shipment.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipment
     */
    protected $requestedShipment;
    /**
     * 
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * The descriptive data for the requested shipment.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipment
     */
    public function getRequestedShipment(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipment
    {
        return $this->requestedShipment;
    }
    /**
     * The descriptive data for the requested shipment.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipment $requestedShipment
     *
     * @return self
     */
    public function setRequestedShipment(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipment $requestedShipment): self
    {
        $this->initialized['requestedShipment'] = true;
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * 
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputAlertsItem> $alerts
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