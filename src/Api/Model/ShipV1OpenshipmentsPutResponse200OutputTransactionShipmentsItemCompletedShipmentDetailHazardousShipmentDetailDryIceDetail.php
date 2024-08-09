<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail extends \ArrayObject
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
     * Specify total dry ice weight for the shipment.
     *
     * @var ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailTotalWeight
     */
    protected $totalWeight;
    /**
     * Specifies the package Count for the shipment<br>Example: 10
     *
     * @var int
     */
    protected $packageCount;
    /**
     * Specify that dry ice information is only applicable at the shipment level. Package level dry ice information would not apply.
     *
     * @var ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions
     */
    protected $processingOptions;
    /**
     * Specify total dry ice weight for the shipment.
     *
     * @return ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailTotalWeight
     */
    public function getTotalWeight(): ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailTotalWeight
    {
        return $this->totalWeight;
    }
    /**
     * Specify total dry ice weight for the shipment.
     *
     * @param ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailTotalWeight $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailTotalWeight $totalWeight): self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Specifies the package Count for the shipment<br>Example: 10
     *
     * @return int
     */
    public function getPackageCount(): int
    {
        return $this->packageCount;
    }
    /**
     * Specifies the package Count for the shipment<br>Example: 10
     *
     * @param int $packageCount
     *
     * @return self
     */
    public function setPackageCount(int $packageCount): self
    {
        $this->initialized['packageCount'] = true;
        $this->packageCount = $packageCount;
        return $this;
    }
    /**
     * Specify that dry ice information is only applicable at the shipment level. Package level dry ice information would not apply.
     *
     * @return ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions
     */
    public function getProcessingOptions(): ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions
    {
        return $this->processingOptions;
    }
    /**
     * Specify that dry ice information is only applicable at the shipment level. Package level dry ice information would not apply.
     *
     * @param ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions $processingOptions
     *
     * @return self
     */
    public function setProcessingOptions(ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions $processingOptions): self
    {
        $this->initialized['processingOptions'] = true;
        $this->processingOptions = $processingOptions;
        return $this;
    }
}