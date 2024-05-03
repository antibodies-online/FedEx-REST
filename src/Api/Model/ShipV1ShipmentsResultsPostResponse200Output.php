<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsResultsPostResponse200Output extends \ArrayObject
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
     * @var list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItem>
     */
    protected $transactionShipments;
    /**
     * object indicate the alert details received in the output.
     *
     * @var list<ShipV1ShipmentsResultsPostResponse200OutputalertsItem>
     */
    protected $alerts;
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @return list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItem>
     */
    public function getTransactionShipments() : array
    {
        return $this->transactionShipments;
    }
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @param list<ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItem> $transactionShipments
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
     * object indicate the alert details received in the output.
     *
     * @return list<ShipV1ShipmentsResultsPostResponse200OutputalertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * object indicate the alert details received in the output.
     *
     * @param list<ShipV1ShipmentsResultsPostResponse200OutputalertsItem> $alerts
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