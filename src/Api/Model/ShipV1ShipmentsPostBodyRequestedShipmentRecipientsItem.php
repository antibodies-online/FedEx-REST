<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItem extends \ArrayObject
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
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemAddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemContact
     */
    protected $contact;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemTinsItem>
     */
    protected $tins;
    /**
     * Specify the delivery instructions to be added with the shipment. Use with Ground Home Delivery.<br>Example: Delivery Instructions
     *
     * @var string
     */
    protected $deliveryInstructions;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemAddress
     */
    public function getAddress() : ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemAddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemContact
     */
    public function getContact() : ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemContact $contact
     *
     * @return self
     */
    public function setContact(ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemContact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemTinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentRecipientsItemTinsItem> $tins
     *
     * @return self
     */
    public function setTins(array $tins) : self
    {
        $this->initialized['tins'] = true;
        $this->tins = $tins;
        return $this;
    }
    /**
     * Specify the delivery instructions to be added with the shipment. Use with Ground Home Delivery.<br>Example: Delivery Instructions
     *
     * @return string
     */
    public function getDeliveryInstructions() : string
    {
        return $this->deliveryInstructions;
    }
    /**
     * Specify the delivery instructions to be added with the shipment. Use with Ground Home Delivery.<br>Example: Delivery Instructions
     *
     * @param string $deliveryInstructions
     *
     * @return self
     */
    public function setDeliveryInstructions(string $deliveryInstructions) : self
    {
        $this->initialized['deliveryInstructions'] = true;
        $this->deliveryInstructions = $deliveryInstructions;
        return $this;
    }
}