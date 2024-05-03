<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptions extends \ArrayObject
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
     * Specify the Hazardous commodity quantity details.
     *
     * @var ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsQuantity
     */
    protected $quantity;
    /**
     * Specifies the inner receptacles within the container.
     *
     * @var list<ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsInnerReceptaclesItem>
     */
    protected $innerReceptacles;
    /**
     * Indicates details of hazardous commodity option detail.
     *
     * @var ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsOptions
     */
    protected $options;
    /**
     * Required<br>Details of hazardous commodity description.
     *
     * @var ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription
     */
    protected $description;
    /**
     * Specify the Hazardous commodity quantity details.
     *
     * @return ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsQuantity
     */
    public function getQuantity() : ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsQuantity
    {
        return $this->quantity;
    }
    /**
     * Specify the Hazardous commodity quantity details.
     *
     * @param ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsQuantity $quantity
     *
     * @return self
     */
    public function setQuantity(ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsQuantity $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Specifies the inner receptacles within the container.
     *
     * @return list<ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsInnerReceptaclesItem>
     */
    public function getInnerReceptacles() : array
    {
        return $this->innerReceptacles;
    }
    /**
     * Specifies the inner receptacles within the container.
     *
     * @param list<ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsInnerReceptaclesItem> $innerReceptacles
     *
     * @return self
     */
    public function setInnerReceptacles(array $innerReceptacles) : self
    {
        $this->initialized['innerReceptacles'] = true;
        $this->innerReceptacles = $innerReceptacles;
        return $this;
    }
    /**
     * Indicates details of hazardous commodity option detail.
     *
     * @return ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsOptions
     */
    public function getOptions() : ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsOptions
    {
        return $this->options;
    }
    /**
     * Indicates details of hazardous commodity option detail.
     *
     * @param ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsOptions $options
     *
     * @return self
     */
    public function setOptions(ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsOptions $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * Required<br>Details of hazardous commodity description.
     *
     * @return ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription
     */
    public function getDescription() : ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription
    {
        return $this->description;
    }
    /**
     * Required<br>Details of hazardous commodity description.
     *
     * @param ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription $description
     *
     * @return self
     */
    public function setDescription(ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescription $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}