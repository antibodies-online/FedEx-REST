<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsCancelPutBody extends \ArrayObject
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
     * This is the FedEx account number. <br>Example: Your account number
     *
     * @var PickupV1PickupsCancelPutBodyAssociatedAccountNumber
     */
    protected $associatedAccountNumber;
    /**
     * The confirmation number provided by FedEx to the customer when the pickup was scheduled or requested.<br> Example: 7
     *
     * @var string
     */
    protected $pickupConfirmationCode;
    /**
     * Placeholder for any message to be passed to the FedEx pickup courier.<br>Note:Maximum length is 60 characters.<br> Example: Please ring bell at loading dock.
     *
     * @var string
     */
    protected $remarks;
    /**
     * This is a placeholder to provide the FedEx operating company (transportation) code used for package delivery. Required for FedEx Ground.<br> Optional for FedEx Express.<br> The Default is FedEx Express i.e. FDXE.
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Address details for the associated pickup account. Indicates if the address is residential. Specifies the city name, country code, streetline number, postal code, address verification Identifier, and state or province code.
     *
     * @var PickupV1PickupsCancelPutBodyAccountAddressOfRecord
     */
    protected $accountAddressOfRecord;
    /**
     * Indicates the date the pickup dispatch occurs.<br>Format YYYY-MM-DD <br> Example: 2019-10-15
     *
     * @var string
     */
    protected $scheduledDate;
    /**
     * The FedEx Express location identifier responsible for processing the pickup request. This is returned in the CreatePickup response and is required to cancel a FedEx Express dispatch.Required only for FedEx Express Pickups. Optional for FedEx Ground. Example: LOSA
     *
     * @var string
     */
    protected $location;
    /**
     * This is the FedEx account number. <br>Example: Your account number
     *
     * @return PickupV1PickupsCancelPutBodyAssociatedAccountNumber
     */
    public function getAssociatedAccountNumber(): PickupV1PickupsCancelPutBodyAssociatedAccountNumber
    {
        return $this->associatedAccountNumber;
    }
    /**
     * This is the FedEx account number. <br>Example: Your account number
     *
     * @param PickupV1PickupsCancelPutBodyAssociatedAccountNumber $associatedAccountNumber
     *
     * @return self
     */
    public function setAssociatedAccountNumber(PickupV1PickupsCancelPutBodyAssociatedAccountNumber $associatedAccountNumber): self
    {
        $this->initialized['associatedAccountNumber'] = true;
        $this->associatedAccountNumber = $associatedAccountNumber;
        return $this;
    }
    /**
     * The confirmation number provided by FedEx to the customer when the pickup was scheduled or requested.<br> Example: 7
     *
     * @return string
     */
    public function getPickupConfirmationCode(): string
    {
        return $this->pickupConfirmationCode;
    }
    /**
     * The confirmation number provided by FedEx to the customer when the pickup was scheduled or requested.<br> Example: 7
     *
     * @param string $pickupConfirmationCode
     *
     * @return self
     */
    public function setPickupConfirmationCode(string $pickupConfirmationCode): self
    {
        $this->initialized['pickupConfirmationCode'] = true;
        $this->pickupConfirmationCode = $pickupConfirmationCode;
        return $this;
    }
    /**
     * Placeholder for any message to be passed to the FedEx pickup courier.<br>Note:Maximum length is 60 characters.<br> Example: Please ring bell at loading dock.
     *
     * @return string
     */
    public function getRemarks(): string
    {
        return $this->remarks;
    }
    /**
     * Placeholder for any message to be passed to the FedEx pickup courier.<br>Note:Maximum length is 60 characters.<br> Example: Please ring bell at loading dock.
     *
     * @param string $remarks
     *
     * @return self
     */
    public function setRemarks(string $remarks): self
    {
        $this->initialized['remarks'] = true;
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * This is a placeholder to provide the FedEx operating company (transportation) code used for package delivery. Required for FedEx Ground.<br> Optional for FedEx Express.<br> The Default is FedEx Express i.e. FDXE.
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * This is a placeholder to provide the FedEx operating company (transportation) code used for package delivery. Required for FedEx Ground.<br> Optional for FedEx Express.<br> The Default is FedEx Express i.e. FDXE.
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
     * Address details for the associated pickup account. Indicates if the address is residential. Specifies the city name, country code, streetline number, postal code, address verification Identifier, and state or province code.
     *
     * @return PickupV1PickupsCancelPutBodyAccountAddressOfRecord
     */
    public function getAccountAddressOfRecord(): PickupV1PickupsCancelPutBodyAccountAddressOfRecord
    {
        return $this->accountAddressOfRecord;
    }
    /**
     * Address details for the associated pickup account. Indicates if the address is residential. Specifies the city name, country code, streetline number, postal code, address verification Identifier, and state or province code.
     *
     * @param PickupV1PickupsCancelPutBodyAccountAddressOfRecord $accountAddressOfRecord
     *
     * @return self
     */
    public function setAccountAddressOfRecord(PickupV1PickupsCancelPutBodyAccountAddressOfRecord $accountAddressOfRecord): self
    {
        $this->initialized['accountAddressOfRecord'] = true;
        $this->accountAddressOfRecord = $accountAddressOfRecord;
        return $this;
    }
    /**
     * Indicates the date the pickup dispatch occurs.<br>Format YYYY-MM-DD <br> Example: 2019-10-15
     *
     * @return string
     */
    public function getScheduledDate(): string
    {
        return $this->scheduledDate;
    }
    /**
     * Indicates the date the pickup dispatch occurs.<br>Format YYYY-MM-DD <br> Example: 2019-10-15
     *
     * @param string $scheduledDate
     *
     * @return self
     */
    public function setScheduledDate(string $scheduledDate): self
    {
        $this->initialized['scheduledDate'] = true;
        $this->scheduledDate = $scheduledDate;
        return $this;
    }
    /**
     * The FedEx Express location identifier responsible for processing the pickup request. This is returned in the CreatePickup response and is required to cancel a FedEx Express dispatch.Required only for FedEx Express Pickups. Optional for FedEx Ground. Example: LOSA
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * The FedEx Express location identifier responsible for processing the pickup request. This is returned in the CreatePickup response and is required to cancel a FedEx Express dispatch.Required only for FedEx Express Pickups. Optional for FedEx Ground. Example: LOSA
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
}