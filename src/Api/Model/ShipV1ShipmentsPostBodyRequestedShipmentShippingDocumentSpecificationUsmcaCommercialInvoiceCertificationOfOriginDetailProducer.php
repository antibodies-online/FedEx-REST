<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducer extends \ArrayObject
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
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact
     */
    protected $contact;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerTinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress
     */
    public function getAddress(): ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact
     */
    public function getContact(): ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact $contact
     *
     * @return self
     */
    public function setContact(ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerTinsItem>
     */
    public function getTins(): array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerTinsItem> $tins
     *
     * @return self
     */
    public function setTins(array $tins): self
    {
        $this->initialized['tins'] = true;
        $this->tins = $tins;
        return $this;
    }
}