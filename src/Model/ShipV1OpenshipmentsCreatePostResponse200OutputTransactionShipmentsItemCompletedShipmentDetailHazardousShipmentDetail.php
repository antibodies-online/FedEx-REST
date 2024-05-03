<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetail extends \ArrayObject
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
     * @var ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
     */
    protected $hazardousSummaryDetail;
    /**
     * Specifies the details around the ADR license required for shipping.
     *
     * @var ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
     */
    protected $adrLicense;
    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     *
     * @var ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
     */
    protected $dryIceDetail;

    /**
     * Specifies Completed Hazardous Summary Detail.
     */
    public function getHazardousSummaryDetail(): ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail
    {
        return $this->hazardousSummaryDetail;
    }

    /**
     * Specifies Completed Hazardous Summary Detail.
     */
    public function setHazardousSummaryDetail(ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail $hazardousSummaryDetail): self
    {
        $this->initialized['hazardousSummaryDetail'] = true;
        $this->hazardousSummaryDetail = $hazardousSummaryDetail;

        return $this;
    }

    /**
     * Specifies the details around the ADR license required for shipping.
     */
    public function getAdrLicense(): ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense
    {
        return $this->adrLicense;
    }

    /**
     * Specifies the details around the ADR license required for shipping.
     */
    public function setAdrLicense(ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense $adrLicense): self
    {
        $this->initialized['adrLicense'] = true;
        $this->adrLicense = $adrLicense;

        return $this;
    }

    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     */
    public function getDryIceDetail(): ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail
    {
        return $this->dryIceDetail;
    }

    /**
     * Specifies the shipment level totals of dry ice data across all packages.
     */
    public function setDryIceDetail(ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetail $dryIceDetail): self
    {
        $this->initialized['dryIceDetail'] = true;
        $this->dryIceDetail = $dryIceDetail;

        return $this;
    }
}
