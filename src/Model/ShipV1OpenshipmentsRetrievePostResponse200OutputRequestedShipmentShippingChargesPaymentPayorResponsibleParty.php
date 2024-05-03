<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsibleParty extends \ArrayObject
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
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsiblePartyContact
     */
    protected $contact;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber
     */
    protected $accountNumber;

    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     */
    public function getAddress(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress
    {
        return $this->address;
    }

    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     */
    public function setAddress(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * Indicate the contact details for this shipment.
     */
    public function getContact(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsiblePartyContact
    {
        return $this->contact;
    }

    /**
     * Indicate the contact details for this shipment.
     */
    public function setContact(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsiblePartyContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }

    /**
     * This is FedEx Account number details.
     */
    public function getAccountNumber(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber
    {
        return $this->accountNumber;
    }

    /**
     * This is FedEx Account number details.
     */
    public function setAccountNumber(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }
}
