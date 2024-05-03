<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetails extends \ArrayObject
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
     * Indicates the regulatory advisory details.
     *
     * @var ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
     */
    protected $regulatoryAdvisory;

    /**
     * Indicates the regulatory advisory details.
     */
    public function getRegulatoryAdvisory(): ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
    {
        return $this->regulatoryAdvisory;
    }

    /**
     * Indicates the regulatory advisory details.
     */
    public function setRegulatoryAdvisory(ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory $regulatoryAdvisory): self
    {
        $this->initialized['regulatoryAdvisory'] = true;
        $this->regulatoryAdvisory = $regulatoryAdvisory;

        return $this;
    }
}
