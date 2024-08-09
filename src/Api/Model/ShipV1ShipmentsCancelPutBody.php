<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsCancelPutBody extends \ArrayObject
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
     * The account number (account value) associated with the shipment.
     *
     * @var ShipV1ShipmentsCancelPutBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * A boolean flag passed by Clients to indicate that whether a shipment is a EMAIL shipment(Pending Shipment) or not. Once a shipment is confirmed, it can no longer be cancelled by having this flag as True.
     *
     * @var bool
     */
    protected $emailShipment;
    /**
     * The two-letter sender Country code(Ex: US, CA, GB..etc).<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $senderCountryCode;
    /**
     * Specifies which packages in a shipment to be canceled<b>DELETE_ALL_PACKAGES</b> which will cancel all tracking numbers associated to the shipment.
     *
     * @var string
     */
    protected $deletionControl;
    /**
     * This is an unique number assigned by FedEx to the packages for tracking.<br>Example: "794953555571"
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * The account number (account value) associated with the shipment.
     *
     * @return ShipV1ShipmentsCancelPutBodyAccountNumber
     */
    public function getAccountNumber(): ShipV1ShipmentsCancelPutBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number (account value) associated with the shipment.
     *
     * @param ShipV1ShipmentsCancelPutBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsCancelPutBodyAccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * A boolean flag passed by Clients to indicate that whether a shipment is a EMAIL shipment(Pending Shipment) or not. Once a shipment is confirmed, it can no longer be cancelled by having this flag as True.
     *
     * @return bool
     */
    public function getEmailShipment(): bool
    {
        return $this->emailShipment;
    }
    /**
     * A boolean flag passed by Clients to indicate that whether a shipment is a EMAIL shipment(Pending Shipment) or not. Once a shipment is confirmed, it can no longer be cancelled by having this flag as True.
     *
     * @param bool $emailShipment
     *
     * @return self
     */
    public function setEmailShipment(bool $emailShipment): self
    {
        $this->initialized['emailShipment'] = true;
        $this->emailShipment = $emailShipment;
        return $this;
    }
    /**
     * The two-letter sender Country code(Ex: US, CA, GB..etc).<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getSenderCountryCode(): string
    {
        return $this->senderCountryCode;
    }
    /**
     * The two-letter sender Country code(Ex: US, CA, GB..etc).<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @param string $senderCountryCode
     *
     * @return self
     */
    public function setSenderCountryCode(string $senderCountryCode): self
    {
        $this->initialized['senderCountryCode'] = true;
        $this->senderCountryCode = $senderCountryCode;
        return $this;
    }
    /**
     * Specifies which packages in a shipment to be canceled<b>DELETE_ALL_PACKAGES</b> which will cancel all tracking numbers associated to the shipment.
     *
     * @return string
     */
    public function getDeletionControl(): string
    {
        return $this->deletionControl;
    }
    /**
     * Specifies which packages in a shipment to be canceled<b>DELETE_ALL_PACKAGES</b> which will cancel all tracking numbers associated to the shipment.
     *
     * @param string $deletionControl
     *
     * @return self
     */
    public function setDeletionControl(string $deletionControl): self
    {
        $this->initialized['deletionControl'] = true;
        $this->deletionControl = $deletionControl;
        return $this;
    }
    /**
     * This is an unique number assigned by FedEx to the packages for tracking.<br>Example: "794953555571"
     *
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
    /**
     * This is an unique number assigned by FedEx to the packages for tracking.<br>Example: "794953555571"
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
}