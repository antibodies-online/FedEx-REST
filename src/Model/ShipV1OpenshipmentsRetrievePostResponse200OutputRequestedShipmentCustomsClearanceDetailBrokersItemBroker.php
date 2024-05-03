<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailBrokersItemBroker extends \ArrayObject
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
     * Specifies broker address details.
     */
    protected $address;
    /**
     * Specifies broker contact details.
     */
    protected $contact;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailBrokersItemBrokertinsItem>
     */
    protected $tins;

    /**
     * Specifies broker address details.
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Specifies broker address details.
     */
    public function setAddress($address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * Specifies broker contact details.
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Specifies broker contact details.
     */
    public function setContact($contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }

    /**
     * This is FedEx Account number details.
     */
    public function getAccountNumber(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber
    {
        return $this->accountNumber;
    }

    /**
     * This is FedEx Account number details.
     */
    public function setAccountNumber(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailBrokersItemBrokeraccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailBrokersItemBrokertinsItem>
     */
    public function getTins(): array
    {
        return $this->tins;
    }

    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailBrokersItemBrokertinsItem> $tins
     */
    public function setTins(array $tins): self
    {
        $this->initialized['tins'] = true;
        $this->tins = $tins;

        return $this;
    }
}