<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetail extends \ArrayObject
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
     * Indicates the details about the users who can access the shipment.
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetailAccessorDetailsItem>
     */
    protected $accessorDetails;
    /**
     * Indicates the details about the users who can access the shipment.
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetailAccessorDetailsItem>
     */
    public function getAccessorDetails(): array
    {
        return $this->accessorDetails;
    }
    /**
     * Indicates the details about the users who can access the shipment.
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetailAccessorDetailsItem> $accessorDetails
     *
     * @return self
     */
    public function setAccessorDetails(array $accessorDetails): self
    {
        $this->initialized['accessorDetails'] = true;
        $this->accessorDetails = $accessorDetails;
        return $this;
    }
}