<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail extends \ArrayObject
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
     * Specifies Completed Hazardous Summary Detail.
     *
     * @var ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
     */
    protected $hazardousSummaryDetail;
    /**
     * Specifies the details around the ADR license required for shipping.
     *
     * @var ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
     */
    protected $adrLicense;
    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     *
     * @var ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
     */
    protected $dryIceDetail;
    /**
     * Specifies Completed Hazardous Summary Detail.
     *
     * @return ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
     */
    public function getHazardousSummaryDetail(): ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
    {
        return $this->hazardousSummaryDetail;
    }
    /**
     * Specifies Completed Hazardous Summary Detail.
     *
     * @param ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail $hazardousSummaryDetail
     *
     * @return self
     */
    public function setHazardousSummaryDetail(ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail $hazardousSummaryDetail): self
    {
        $this->initialized['hazardousSummaryDetail'] = true;
        $this->hazardousSummaryDetail = $hazardousSummaryDetail;
        return $this;
    }
    /**
     * Specifies the details around the ADR license required for shipping.
     *
     * @return ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
     */
    public function getAdrLicense(): ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
    {
        return $this->adrLicense;
    }
    /**
     * Specifies the details around the ADR license required for shipping.
     *
     * @param ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense $adrLicense
     *
     * @return self
     */
    public function setAdrLicense(ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense $adrLicense): self
    {
        $this->initialized['adrLicense'] = true;
        $this->adrLicense = $adrLicense;
        return $this;
    }
    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     *
     * @return ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
     */
    public function getDryIceDetail(): ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
    {
        return $this->dryIceDetail;
    }
    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     *
     * @param ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail $dryIceDetail
     *
     * @return self
     */
    public function setDryIceDetail(ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail $dryIceDetail): self
    {
        $this->initialized['dryIceDetail'] = true;
        $this->dryIceDetail = $dryIceDetail;
        return $this;
    }
}