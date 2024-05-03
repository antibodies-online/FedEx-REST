<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail extends \ArrayObject
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
     * @var ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
     */
    protected $hazardousSummaryDetail;
    /**
     * Specifies the details around the ADR license required for shipping.
     *
     * @var ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
     */
    protected $adrLicense;
    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     *
     * @var ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
     */
    protected $dryIceDetail;
    /**
     * Specifies Completed Hazardous Summary Detail.
     *
     * @return ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
     */
    public function getHazardousSummaryDetail() : ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
    {
        return $this->hazardousSummaryDetail;
    }
    /**
     * Specifies Completed Hazardous Summary Detail.
     *
     * @param ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail $hazardousSummaryDetail
     *
     * @return self
     */
    public function setHazardousSummaryDetail(ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail $hazardousSummaryDetail) : self
    {
        $this->initialized['hazardousSummaryDetail'] = true;
        $this->hazardousSummaryDetail = $hazardousSummaryDetail;
        return $this;
    }
    /**
     * Specifies the details around the ADR license required for shipping.
     *
     * @return ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
     */
    public function getAdrLicense() : ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
    {
        return $this->adrLicense;
    }
    /**
     * Specifies the details around the ADR license required for shipping.
     *
     * @param ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense $adrLicense
     *
     * @return self
     */
    public function setAdrLicense(ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense $adrLicense) : self
    {
        $this->initialized['adrLicense'] = true;
        $this->adrLicense = $adrLicense;
        return $this;
    }
    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     *
     * @return ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
     */
    public function getDryIceDetail() : ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
    {
        return $this->dryIceDetail;
    }
    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     *
     * @param ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail $dryIceDetail
     *
     * @return self
     */
    public function setDryIceDetail(ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail $dryIceDetail) : self
    {
        $this->initialized['dryIceDetail'] = true;
        $this->dryIceDetail = $dryIceDetail;
        return $this;
    }
}