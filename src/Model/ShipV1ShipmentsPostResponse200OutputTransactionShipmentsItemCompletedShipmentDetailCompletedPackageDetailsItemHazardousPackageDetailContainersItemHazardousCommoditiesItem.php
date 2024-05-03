<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem extends \ArrayObject
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
     * Indicates hazardous commodity quantity details.
     *
     * @var ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity
     */
    protected $quantity;
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @var ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions
     */
    protected $options;
    /**
     * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     *
     * @var ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription
     */
    protected $description;
    /**
     * Specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     *
     * @var ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail
     */
    protected $netExplosiveDetail;
    /**
     * The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.<br>Example: 2.0.
     *
     * @var float
     */
    protected $massPoints;

    /**
     * Indicates hazardous commodity quantity details.
     */
    public function getQuantity(): ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity
    {
        return $this->quantity;
    }

    /**
     * Indicates hazardous commodity quantity details.
     */
    public function setQuantity(ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Customer-provided specifications for handling individual commodities.
     */
    public function getOptions(): ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions
    {
        return $this->options;
    }

    /**
     * Customer-provided specifications for handling individual commodities.
     */
    public function setOptions(ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;

        return $this;
    }

    /**
     * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     */
    public function getDescription(): ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription
    {
        return $this->description;
    }

    /**
     * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     */
    public function setDescription(ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     */
    public function getNetExplosiveDetail(): ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail
    {
        return $this->netExplosiveDetail;
    }

    /**
     * Specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     */
    public function setNetExplosiveDetail(ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail $netExplosiveDetail): self
    {
        $this->initialized['netExplosiveDetail'] = true;
        $this->netExplosiveDetail = $netExplosiveDetail;

        return $this;
    }

    /**
     * The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.<br>Example: 2.0.
     */
    public function getMassPoints(): float
    {
        return $this->massPoints;
    }

    /**
     * The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.<br>Example: 2.0.
     */
    public function setMassPoints(float $massPoints): self
    {
        $this->initialized['massPoints'] = true;
        $this->massPoints = $massPoints;

        return $this;
    }
}