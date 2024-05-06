<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetail extends \ArrayObject
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
     * Indicate the Account number details to be invoiced for freight pickup.
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetailaccountNumber
     */
    protected $accountNumber;
    /**
     * Specifies the role. <br>Example: SHIPPER 
     *
     * @var string
     */
    protected $role;
    /**
     * Specifies the payment. <br>Example: SENDER
     *
     * @var string
     */
    protected $payment;
    /**
     * Indicates the contact details for the party such as name, email, and phone number.
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetailsubmittedBy
     */
    protected $submittedBy;
    /**
     * Specifies the list of line items.
     *
     * @var list<PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem>
     */
    protected $lineItems;
    /**
     * The descriptive data of the alternateBilling party for the freight pickup and their physical location. This is used to identify customer's account for billing('Send Bill To'(SBT)).
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBilling
     */
    protected $alternateBilling;
    /**
     * Specifies the user message that can be sent as part of the pickup confirmation email.<br>Example: This is the user message
     *
     * @var string
     */
    protected $userMessage;
    /**
     * Indicate the Account number details to be invoiced for freight pickup.
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetailaccountNumber
     */
    public function getAccountNumber() : PickupV1FreightPickupsPostBodyFreightPickupDetailaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * Indicate the Account number details to be invoiced for freight pickup.
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetailaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(PickupV1FreightPickupsPostBodyFreightPickupDetailaccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Specifies the role. <br>Example: SHIPPER 
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * Specifies the role. <br>Example: SHIPPER 
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * Specifies the payment. <br>Example: SENDER
     *
     * @return string
     */
    public function getPayment() : string
    {
        return $this->payment;
    }
    /**
     * Specifies the payment. <br>Example: SENDER
     *
     * @param string $payment
     *
     * @return self
     */
    public function setPayment(string $payment) : self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;
        return $this;
    }
    /**
     * Indicates the contact details for the party such as name, email, and phone number.
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetailsubmittedBy
     */
    public function getSubmittedBy() : PickupV1FreightPickupsPostBodyFreightPickupDetailsubmittedBy
    {
        return $this->submittedBy;
    }
    /**
     * Indicates the contact details for the party such as name, email, and phone number.
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetailsubmittedBy $submittedBy
     *
     * @return self
     */
    public function setSubmittedBy(PickupV1FreightPickupsPostBodyFreightPickupDetailsubmittedBy $submittedBy) : self
    {
        $this->initialized['submittedBy'] = true;
        $this->submittedBy = $submittedBy;
        return $this;
    }
    /**
     * Specifies the list of line items.
     *
     * @return list<PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem>
     */
    public function getLineItems() : array
    {
        return $this->lineItems;
    }
    /**
     * Specifies the list of line items.
     *
     * @param list<PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItem> $lineItems
     *
     * @return self
     */
    public function setLineItems(array $lineItems) : self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;
        return $this;
    }
    /**
     * The descriptive data of the alternateBilling party for the freight pickup and their physical location. This is used to identify customer's account for billing('Send Bill To'(SBT)).
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBilling
     */
    public function getAlternateBilling() : PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBilling
    {
        return $this->alternateBilling;
    }
    /**
     * The descriptive data of the alternateBilling party for the freight pickup and their physical location. This is used to identify customer's account for billing('Send Bill To'(SBT)).
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBilling $alternateBilling
     *
     * @return self
     */
    public function setAlternateBilling(PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBilling $alternateBilling) : self
    {
        $this->initialized['alternateBilling'] = true;
        $this->alternateBilling = $alternateBilling;
        return $this;
    }
    /**
     * Specifies the user message that can be sent as part of the pickup confirmation email.<br>Example: This is the user message
     *
     * @return string
     */
    public function getUserMessage() : string
    {
        return $this->userMessage;
    }
    /**
     * Specifies the user message that can be sent as part of the pickup confirmation email.<br>Example: This is the user message
     *
     * @param string $userMessage
     *
     * @return self
     */
    public function setUserMessage(string $userMessage) : self
    {
        $this->initialized['userMessage'] = true;
        $this->userMessage = $userMessage;
        return $this;
    }
}