<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsCancelPutBody extends \ArrayObject
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
     * Specify the FedEx Account number. <br>Example: Your account number
     *
     * @var PickupV1FreightPickupsCancelPutBodyAssociatedAccountNumber
     */
    protected $associatedAccountNumber;
    /**
     * The confirmation number provided by FedEx to the customer when the pickup was scheduled or requested.<br> Example: XXXX1007MEM62XXXX.
     *
     * @var string
     */
    protected $pickupConfirmationCode;
    /**
     * Specify the additional information to be passed on the pickup courier.
     *
     * @var string
     */
    protected $remarks;
    /**
     * Specify the reason for cancellation of pickup.
     *
     * @var string
     */
    protected $reason;
    /**
     * Specify the contact name.
     *
     * @var string
     */
    protected $contactName;
    /**
     * Specifies the date when pickup dispatch occurs.<br>Format YYYY-MM-DD <br> Example: 2019-10-15
     *
     * @var string
     */
    protected $scheduledDate;
    /**
     * Specify the FedEx Account number. <br>Example: Your account number
     *
     * @return PickupV1FreightPickupsCancelPutBodyAssociatedAccountNumber
     */
    public function getAssociatedAccountNumber() : PickupV1FreightPickupsCancelPutBodyAssociatedAccountNumber
    {
        return $this->associatedAccountNumber;
    }
    /**
     * Specify the FedEx Account number. <br>Example: Your account number
     *
     * @param PickupV1FreightPickupsCancelPutBodyAssociatedAccountNumber $associatedAccountNumber
     *
     * @return self
     */
    public function setAssociatedAccountNumber(PickupV1FreightPickupsCancelPutBodyAssociatedAccountNumber $associatedAccountNumber) : self
    {
        $this->initialized['associatedAccountNumber'] = true;
        $this->associatedAccountNumber = $associatedAccountNumber;
        return $this;
    }
    /**
     * The confirmation number provided by FedEx to the customer when the pickup was scheduled or requested.<br> Example: XXXX1007MEM62XXXX.
     *
     * @return string
     */
    public function getPickupConfirmationCode() : string
    {
        return $this->pickupConfirmationCode;
    }
    /**
     * The confirmation number provided by FedEx to the customer when the pickup was scheduled or requested.<br> Example: XXXX1007MEM62XXXX.
     *
     * @param string $pickupConfirmationCode
     *
     * @return self
     */
    public function setPickupConfirmationCode(string $pickupConfirmationCode) : self
    {
        $this->initialized['pickupConfirmationCode'] = true;
        $this->pickupConfirmationCode = $pickupConfirmationCode;
        return $this;
    }
    /**
     * Specify the additional information to be passed on the pickup courier.
     *
     * @return string
     */
    public function getRemarks() : string
    {
        return $this->remarks;
    }
    /**
     * Specify the additional information to be passed on the pickup courier.
     *
     * @param string $remarks
     *
     * @return self
     */
    public function setRemarks(string $remarks) : self
    {
        $this->initialized['remarks'] = true;
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Specify the reason for cancellation of pickup.
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * Specify the reason for cancellation of pickup.
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * Specify the contact name.
     *
     * @return string
     */
    public function getContactName() : string
    {
        return $this->contactName;
    }
    /**
     * Specify the contact name.
     *
     * @param string $contactName
     *
     * @return self
     */
    public function setContactName(string $contactName) : self
    {
        $this->initialized['contactName'] = true;
        $this->contactName = $contactName;
        return $this;
    }
    /**
     * Specifies the date when pickup dispatch occurs.<br>Format YYYY-MM-DD <br> Example: 2019-10-15
     *
     * @return string
     */
    public function getScheduledDate() : string
    {
        return $this->scheduledDate;
    }
    /**
     * Specifies the date when pickup dispatch occurs.<br>Format YYYY-MM-DD <br> Example: 2019-10-15
     *
     * @param string $scheduledDate
     *
     * @return self
     */
    public function setScheduledDate(string $scheduledDate) : self
    {
        $this->initialized['scheduledDate'] = true;
        $this->scheduledDate = $scheduledDate;
        return $this;
    }
}