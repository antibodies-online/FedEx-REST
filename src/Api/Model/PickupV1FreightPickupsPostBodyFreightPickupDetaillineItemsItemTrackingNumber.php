<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemTrackingNumber extends \ArrayObject
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
     * The value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages. The only type supported is 'TRACKING_NUMBER_OR_DOORTAG'.  In case of duplicate shipments using the same tracking number, the trackingNumberUniqueId is needed to differentiate between shipments. <br> Example: 123456789012
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Specifies the tracking qualifier
     *
     * @var string
     */
    protected $trackingQualifier;
    /**
     * Specifies the FedEx operating company (transportation) used for this package's delivery. The valid values are FDXE, FDXG, FXFR, FXSP, FDXC, FXCC.<br>Example: FDXE
     *
     * @var string
     */
    protected $trackingCarrier;
    /**
     * This is the unique qualifier for a specific package, used to distinguish between duplicate FedEx trackingNumbers. <br> Example: 245822~123456789012~FDEG
     *
     * @var string
     */
    protected $trackingUniqueId;
    /**
     * The value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages. The only type supported is 'TRACKING_NUMBER_OR_DOORTAG'.  In case of duplicate shipments using the same tracking number, the trackingNumberUniqueId is needed to differentiate between shipments. <br> Example: 123456789012
     *
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
    /**
     * The value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages. The only type supported is 'TRACKING_NUMBER_OR_DOORTAG'.  In case of duplicate shipments using the same tracking number, the trackingNumberUniqueId is needed to differentiate between shipments. <br> Example: 123456789012
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber): self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Specifies the tracking qualifier
     *
     * @return string
     */
    public function getTrackingQualifier(): string
    {
        return $this->trackingQualifier;
    }
    /**
     * Specifies the tracking qualifier
     *
     * @param string $trackingQualifier
     *
     * @return self
     */
    public function setTrackingQualifier(string $trackingQualifier): self
    {
        $this->initialized['trackingQualifier'] = true;
        $this->trackingQualifier = $trackingQualifier;
        return $this;
    }
    /**
     * Specifies the FedEx operating company (transportation) used for this package's delivery. The valid values are FDXE, FDXG, FXFR, FXSP, FDXC, FXCC.<br>Example: FDXE
     *
     * @return string
     */
    public function getTrackingCarrier(): string
    {
        return $this->trackingCarrier;
    }
    /**
     * Specifies the FedEx operating company (transportation) used for this package's delivery. The valid values are FDXE, FDXG, FXFR, FXSP, FDXC, FXCC.<br>Example: FDXE
     *
     * @param string $trackingCarrier
     *
     * @return self
     */
    public function setTrackingCarrier(string $trackingCarrier): self
    {
        $this->initialized['trackingCarrier'] = true;
        $this->trackingCarrier = $trackingCarrier;
        return $this;
    }
    /**
     * This is the unique qualifier for a specific package, used to distinguish between duplicate FedEx trackingNumbers. <br> Example: 245822~123456789012~FDEG
     *
     * @return string
     */
    public function getTrackingUniqueId(): string
    {
        return $this->trackingUniqueId;
    }
    /**
     * This is the unique qualifier for a specific package, used to distinguish between duplicate FedEx trackingNumbers. <br> Example: 245822~123456789012~FDEG
     *
     * @param string $trackingUniqueId
     *
     * @return self
     */
    public function setTrackingUniqueId(string $trackingUniqueId): self
    {
        $this->initialized['trackingUniqueId'] = true;
        $this->trackingUniqueId = $trackingUniqueId;
        return $this;
    }
}