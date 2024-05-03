<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem extends \ArrayObject
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
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity
     */
    protected $quantity;
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions
     */
    protected $options;
    /**
     * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription
     */
    protected $description;
    /**
     * Specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail
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
    public function getQuantity(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity
    {
        return $this->quantity;
    }

    /**
     * Indicates hazardous commodity quantity details.
     */
    public function setQuantity(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Customer-provided specifications for handling individual commodities.
     */
    public function getOptions(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions
    {
        return $this->options;
    }

    /**
     * Customer-provided specifications for handling individual commodities.
     */
    public function setOptions(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;

        return $this;
    }

    /**
     * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     */
    public function getDescription(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription
    {
        return $this->description;
    }

    /**
     * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     */
    public function setDescription(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     */
    public function getNetExplosiveDetail(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail
    {
        return $this->netExplosiveDetail;
    }

    /**
     * Specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     */
    public function setNetExplosiveDetail(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail $netExplosiveDetail): self
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
