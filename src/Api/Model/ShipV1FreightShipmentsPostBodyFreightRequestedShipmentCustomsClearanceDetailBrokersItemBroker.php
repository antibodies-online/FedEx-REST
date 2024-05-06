<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItemBroker extends \ArrayObject
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
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItemBrokertinsItem>
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
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber
     */
    public function getAccountNumber() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItemBrokertinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailBrokersItemBrokertinsItem> $tins
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