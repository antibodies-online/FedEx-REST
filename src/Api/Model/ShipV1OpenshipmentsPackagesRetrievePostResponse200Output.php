<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesRetrievePostResponse200Output extends \ArrayObject
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
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItem
     */
    protected $requestedpackageLineItem;
    /**
     * The alerts received when a shipShipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @var list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItem
     */
    public function getRequestedpackageLineItem(): ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItem
    {
        return $this->requestedpackageLineItem;
    }
    /**
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItem $requestedpackageLineItem
     *
     * @return self
     */
    public function setRequestedpackageLineItem(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItem $requestedpackageLineItem): self
    {
        $this->initialized['requestedpackageLineItem'] = true;
        $this->requestedpackageLineItem = $requestedpackageLineItem;
        return $this;
    }
    /**
     * The alerts received when a shipShipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @return list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The alerts received when a shipShipment is processed. This includes the alert code, alert type, and alert message.
     *
     * @param list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputAlertsItem> $alerts
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