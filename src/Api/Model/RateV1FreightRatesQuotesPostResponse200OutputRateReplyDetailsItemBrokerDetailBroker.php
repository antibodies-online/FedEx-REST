<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetailBroker extends \ArrayObject
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
     * These are Broker address details.
     *
     * @var mixed
     */
    protected $address;
    /**
     * These are broker contact details such as Name, Email, PhoneNumber.
     *
     * @var mixed
     */
    protected $contact;
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetailBrokeraccountNumber
     */
    protected $accountNumber;
    /**
     * These are Broker address details.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * These are Broker address details.
     *
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * These are broker contact details such as Name, Email, PhoneNumber.
     *
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * These are broker contact details such as Name, Email, PhoneNumber.
     *
     * @param mixed $contact
     *
     * @return self
     */
    public function setContact($contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetailBrokeraccountNumber
     */
    public function getAccountNumber(): RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetailBrokeraccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetailBrokeraccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetailBrokeraccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}