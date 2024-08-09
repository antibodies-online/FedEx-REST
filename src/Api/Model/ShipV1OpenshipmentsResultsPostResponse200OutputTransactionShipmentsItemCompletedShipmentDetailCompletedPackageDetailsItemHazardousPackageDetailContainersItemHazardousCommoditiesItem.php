<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem extends \ArrayObject
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
     * @var ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity
     */
    protected $quantity;
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @var ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions
     */
    protected $options;
    /**
     * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     *
     * @var ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription
     */
    protected $description;
    /**
     * Specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     *
     * @var ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail
     */
    protected $netExplosiveDetail;
    /**
     * The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.<br>Example: 2.0
     *
     * @var float
     */
    protected $massPoints;
    /**
     * Indicates hazardous commodity quantity details.
     *
     * @return ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity
     */
    public function getQuantity(): ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity
    {
        return $this->quantity;
    }
    /**
     * Indicates hazardous commodity quantity details.
     *
     * @param ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity $quantity
     *
     * @return self
     */
    public function setQuantity(ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @return ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions
     */
    public function getOptions(): ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions
    {
        return $this->options;
    }
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @param ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions $options
     *
     * @return self
     */
    public function setOptions(ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     *
     * @return ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription
     */
    public function getDescription(): ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription
    {
        return $this->description;
    }
    /**
     * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     *
     * @param ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription $description
     *
     * @return self
     */
    public function setDescription(ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemDescription $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     *
     * @return ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail
     */
    public function getNetExplosiveDetail(): ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail
    {
        return $this->netExplosiveDetail;
    }
    /**
     * Specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     *
     * @param ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail $netExplosiveDetail
     *
     * @return self
     */
    public function setNetExplosiveDetail(ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail $netExplosiveDetail): self
    {
        $this->initialized['netExplosiveDetail'] = true;
        $this->netExplosiveDetail = $netExplosiveDetail;
        return $this;
    }
    /**
     * The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.<br>Example: 2.0
     *
     * @return float
     */
    public function getMassPoints(): float
    {
        return $this->massPoints;
    }
    /**
     * The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.<br>Example: 2.0
     *
     * @param float $massPoints
     *
     * @return self
     */
    public function setMassPoints(float $massPoints): self
    {
        $this->initialized['massPoints'] = true;
        $this->massPoints = $massPoints;
        return $this;
    }
}