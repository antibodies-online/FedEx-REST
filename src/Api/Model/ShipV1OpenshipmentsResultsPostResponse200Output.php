<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsResultsPostResponse200Output extends \ArrayObject
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
     * @var list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItem>
     */
    protected $transactionShipments;
    /**
     * 
     *
     * @var list<ShipV1OpenshipmentsResultsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @return list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItem>
     */
    public function getTransactionShipments() : array
    {
        return $this->transactionShipments;
    }
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @param list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItem> $transactionShipments
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
     * 
     *
     * @return list<ShipV1OpenshipmentsResultsPostResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * 
     *
     * @param list<ShipV1OpenshipmentsResultsPostResponse200OutputAlertsItem> $alerts
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