<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicense extends \ArrayObject
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
     * @var ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicenseLicenseOrPermitDetail
     */
    protected $licenseOrPermitDetail;
    /**
     * This contains the ADR license information, which identifies the license number, the effective date and the expiration date under which the customer is allowed to ship.
     *
     * @return ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicenseLicenseOrPermitDetail
     */
    public function getLicenseOrPermitDetail(): ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicenseLicenseOrPermitDetail
    {
        return $this->licenseOrPermitDetail;
    }
    /**
     * This contains the ADR license information, which identifies the license number, the effective date and the expiration date under which the customer is allowed to ship.
     *
     * @param ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicenseLicenseOrPermitDetail $licenseOrPermitDetail
     *
     * @return self
     */
    public function setLicenseOrPermitDetail(ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailAdrLicenseLicenseOrPermitDetail $licenseOrPermitDetail): self
    {
        $this->initialized['licenseOrPermitDetail'] = true;
        $this->licenseOrPermitDetail = $licenseOrPermitDetail;
        return $this;
    }
}