<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsDeletePutResponse200Output extends \ArrayObject
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
     * Indicates if the open shipment is deleted or not. <br>Example: True
     *
     * @var bool
     */
    protected $deletedOpenshipment;
    /**
     * The alert details received in the response.
     *
     * @var list<ShipV1OpenshipmentsDeletePutResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Indicates if the open shipment is deleted or not. <br>Example: True
     *
     * @return bool
     */
    public function getDeletedOpenshipment(): bool
    {
        return $this->deletedOpenshipment;
    }
    /**
     * Indicates if the open shipment is deleted or not. <br>Example: True
     *
     * @param bool $deletedOpenshipment
     *
     * @return self
     */
    public function setDeletedOpenshipment(bool $deletedOpenshipment): self
    {
        $this->initialized['deletedOpenshipment'] = true;
        $this->deletedOpenshipment = $deletedOpenshipment;
        return $this;
    }
    /**
     * The alert details received in the response.
     *
     * @return list<ShipV1OpenshipmentsDeletePutResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The alert details received in the response.
     *
     * @param list<ShipV1OpenshipmentsDeletePutResponse200OutputAlertsItem> $alerts
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