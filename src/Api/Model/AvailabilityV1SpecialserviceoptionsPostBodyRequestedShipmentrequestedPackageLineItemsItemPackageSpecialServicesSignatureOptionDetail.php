<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesSignatureOptionDetail extends \ArrayObject
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
     * This is the release number. Required if signature option is NO_SIGNATURE_REQUIRED.<br> Example: 23456
     *
     * @var string
     */
    protected $signatureReleaseNumber;
    /**
     * This is the release number. Required if signature option is NO_SIGNATURE_REQUIRED.<br> Example: 23456
     *
     * @return string
     */
    public function getSignatureReleaseNumber() : string
    {
        return $this->signatureReleaseNumber;
    }
    /**
     * This is the release number. Required if signature option is NO_SIGNATURE_REQUIRED.<br> Example: 23456
     *
     * @param string $signatureReleaseNumber
     *
     * @return self
     */
    public function setSignatureReleaseNumber(string $signatureReleaseNumber) : self
    {
        $this->initialized['signatureReleaseNumber'] = true;
        $this->signatureReleaseNumber = $signatureReleaseNumber;
        return $this;
    }
}