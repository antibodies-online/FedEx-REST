<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesDeletePutResponse200Output extends \ArrayObject
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
     * This element shows the status of openshipment packages deletion
     *
     * @var bool
     */
    protected $deletedPackagesFromOpenshipment;
    /**
     * The alerts received when a Shipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @var list<ShipV1OpenshipmentsPackagesDeletePutResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * This element shows the status of openshipment packages deletion
     *
     * @return bool
     */
    public function getDeletedPackagesFromOpenshipment() : bool
    {
        return $this->deletedPackagesFromOpenshipment;
    }
    /**
     * This element shows the status of openshipment packages deletion
     *
     * @param bool $deletedPackagesFromOpenshipment
     *
     * @return self
     */
    public function setDeletedPackagesFromOpenshipment(bool $deletedPackagesFromOpenshipment) : self
    {
        $this->initialized['deletedPackagesFromOpenshipment'] = true;
        $this->deletedPackagesFromOpenshipment = $deletedPackagesFromOpenshipment;
        return $this;
    }
    /**
     * The alerts received when a Shipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @return list<ShipV1OpenshipmentsPackagesDeletePutResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * The alerts received when a Shipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @param list<ShipV1OpenshipmentsPackagesDeletePutResponse200OutputAlertsItem> $alerts
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