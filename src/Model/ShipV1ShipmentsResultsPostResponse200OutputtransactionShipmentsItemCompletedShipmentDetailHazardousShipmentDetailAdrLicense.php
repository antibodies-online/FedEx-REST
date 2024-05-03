<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense extends \ArrayObject
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
     * This contains the ADR license information, which identifies the license number, the effective date and the expiration date under which the customer is allowed to ship.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicenseLicenseOrPermitDetail
     */
    protected $licenseOrPermitDetail;

    /**
     * This contains the ADR license information, which identifies the license number, the effective date and the expiration date under which the customer is allowed to ship.
     */
    public function getLicenseOrPermitDetail(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicenseLicenseOrPermitDetail
    {
        return $this->licenseOrPermitDetail;
    }

    /**
     * This contains the ADR license information, which identifies the license number, the effective date and the expiration date under which the customer is allowed to ship.
     */
    public function setLicenseOrPermitDetail(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicenseLicenseOrPermitDetail $licenseOrPermitDetail): self
    {
        $this->initialized['licenseOrPermitDetail'] = true;
        $this->licenseOrPermitDetail = $licenseOrPermitDetail;

        return $this;
    }
}
