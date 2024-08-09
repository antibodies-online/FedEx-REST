<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TrackingnumbersPostBodyTrackingInfoItemTrackingNumberInfo extends \ArrayObject
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
     * This is a Tracking number for FedEx packages used for tracking a single package or group of packages. <br> Example: 128667043726<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see Mock Tracking Numbers.</a>
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * This is a placeholder to provide the FedEx operating company (transportation) code used for package delivery. <br> Example: FDXE
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Unique identifier used to distinguish duplicate FedEx tracking numbers. This value will be set by FedEx systems. <br> Example: 245822\~123456789012\~FDEG
     *
     * @var string
     */
    protected $trackingNumberUniqueId;
    /**
     * This is a Tracking number for FedEx packages used for tracking a single package or group of packages. <br> Example: 128667043726<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see Mock Tracking Numbers.</a>
     *
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
    /**
     * This is a Tracking number for FedEx packages used for tracking a single package or group of packages. <br> Example: 128667043726<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see Mock Tracking Numbers.</a>
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
     * This is a placeholder to provide the FedEx operating company (transportation) code used for package delivery. <br> Example: FDXE
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * This is a placeholder to provide the FedEx operating company (transportation) code used for package delivery. <br> Example: FDXE
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode): self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Unique identifier used to distinguish duplicate FedEx tracking numbers. This value will be set by FedEx systems. <br> Example: 245822\~123456789012\~FDEG
     *
     * @return string
     */
    public function getTrackingNumberUniqueId(): string
    {
        return $this->trackingNumberUniqueId;
    }
    /**
     * Unique identifier used to distinguish duplicate FedEx tracking numbers. This value will be set by FedEx systems. <br> Example: 245822\~123456789012\~FDEG
     *
     * @param string $trackingNumberUniqueId
     *
     * @return self
     */
    public function setTrackingNumberUniqueId(string $trackingNumberUniqueId): self
    {
        $this->initialized['trackingNumberUniqueId'] = true;
        $this->trackingNumberUniqueId = $trackingNumberUniqueId;
        return $this;
    }
}