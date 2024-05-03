<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail extends \ArrayObject
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
     * Specifies Completed Hazardous Summary Detail.
     *
     * @var ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
     */
    protected $hazardousSummaryDetail;
    /**
     * Specifies the details around the ADR license required for shipping.
     *
     * @var ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
     */
    protected $adrLicense;
    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     *
     * @var ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
     */
    protected $dryIceDetail;
    /**
     * Specifies Completed Hazardous Summary Detail.
     *
     * @return ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
     */
    public function getHazardousSummaryDetail() : ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
    {
        return $this->hazardousSummaryDetail;
    }
    /**
     * Specifies Completed Hazardous Summary Detail.
     *
     * @param ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail $hazardousSummaryDetail
     *
     * @return self
     */
    public function setHazardousSummaryDetail(ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail $hazardousSummaryDetail) : self
    {
        $this->initialized['hazardousSummaryDetail'] = true;
        $this->hazardousSummaryDetail = $hazardousSummaryDetail;
        return $this;
    }
    /**
     * Specifies the details around the ADR license required for shipping.
     *
     * @return ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
     */
    public function getAdrLicense() : ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
    {
        return $this->adrLicense;
    }
    /**
     * Specifies the details around the ADR license required for shipping.
     *
     * @param ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense $adrLicense
     *
     * @return self
     */
    public function setAdrLicense(ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense $adrLicense) : self
    {
        $this->initialized['adrLicense'] = true;
        $this->adrLicense = $adrLicense;
        return $this;
    }
    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     *
     * @return ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
     */
    public function getDryIceDetail() : ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
    {
        return $this->dryIceDetail;
    }
    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     *
     * @param ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail $dryIceDetail
     *
     * @return self
     */
    public function setDryIceDetail(ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail $dryIceDetail) : self
    {
        $this->initialized['dryIceDetail'] = true;
        $this->dryIceDetail = $dryIceDetail;
        return $this;
    }
}