<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail extends \ArrayObject
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
     * Specify total dry ice weight for the shipment.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailTotalWeight
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
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions
     */
    protected $processingOptions;
    /**
     * Specify total dry ice weight for the shipment.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailTotalWeight
     */
    public function getTotalWeight() : ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailTotalWeight
    {
        return $this->totalWeight;
    }
    /**
     * Specify total dry ice weight for the shipment.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailTotalWeight $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailTotalWeight $totalWeight) : self
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
    public function getPackageCount() : int
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
    public function setPackageCount(int $packageCount) : self
    {
        $this->initialized['packageCount'] = true;
        $this->packageCount = $packageCount;
        return $this;
    }
    /**
     * Specify that dry ice information is only applicable at the shipment level. Package level dry ice information would not apply.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions
     */
    public function getProcessingOptions() : ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions
    {
        return $this->processingOptions;
    }
    /**
     * Specify that dry ice information is only applicable at the shipment level. Package level dry ice information would not apply.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions $processingOptions
     *
     * @return self
     */
    public function setProcessingOptions(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions $processingOptions) : self
    {
        $this->initialized['processingOptions'] = true;
        $this->processingOptions = $processingOptions;
        return $this;
    }
}