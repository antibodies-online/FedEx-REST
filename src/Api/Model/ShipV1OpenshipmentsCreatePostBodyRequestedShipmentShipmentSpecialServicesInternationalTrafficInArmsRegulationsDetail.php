<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail extends \ArrayObject
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
     * The export or license number for the ITAR shipment.<br>Minimum length is 5 characters.<br>Maximum length is 21 characters.<br>Example: 9871234
     *
     * @var string
     */
    protected $licenseOrExemptionNumber;
    /**
     * The export or license number for the ITAR shipment.<br>Minimum length is 5 characters.<br>Maximum length is 21 characters.<br>Example: 9871234
     *
     * @return string
     */
    public function getLicenseOrExemptionNumber() : string
    {
        return $this->licenseOrExemptionNumber;
    }
    /**
     * The export or license number for the ITAR shipment.<br>Minimum length is 5 characters.<br>Maximum length is 21 characters.<br>Example: 9871234
     *
     * @param string $licenseOrExemptionNumber
     *
     * @return self
     */
    public function setLicenseOrExemptionNumber(string $licenseOrExemptionNumber) : self
    {
        $this->initialized['licenseOrExemptionNumber'] = true;
        $this->licenseOrExemptionNumber = $licenseOrExemptionNumber;
        return $this;
    }
}