<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetail extends \ArrayObject
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
     * @var list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetailAccessorDetailsItem>
     */
    protected $accessorDetails;

    /**
     * Indicates the details about the users who can access the shipment.
     *
     * @return list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetailAccessorDetailsItem>
     */
    public function getAccessorDetails(): array
    {
        return $this->accessorDetails;
    }

    /**
     * Indicates the details about the users who can access the shipment.
     *
     * @param list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailAccessDetailAccessorDetailsItem> $accessorDetails
     */
    public function setAccessorDetails(array $accessorDetails): self
    {
        $this->initialized['accessorDetails'] = true;
        $this->accessorDetails = $accessorDetails;

        return $this;
    }
}
