<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBroker extends \ArrayObject
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
     * Specifies broker address details.
     *
     * @var mixed
     */
    protected $address;
    /**
     * Specifies broker contact details.
     *
     * @var mixed
     */
    protected $contact;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBrokertinsItem>
     */
    protected $tins;
    /**
     * Specifies broker address details.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Specifies broker address details.
     *
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Specifies broker contact details.
     *
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Specifies broker contact details.
     *
     * @param mixed $contact
     *
     * @return self
     */
    public function setContact($contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is FedEx Account number details.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber
     */
    public function getAccountNumber() : ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBrokertinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBrokertinsItem> $tins
     *
     * @return self
     */
    public function setTins(array $tins) : self
    {
        $this->initialized['tins'] = true;
        $this->tins = $tins;
        return $this;
    }
}