<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducer extends \ArrayObject
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
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact
     */
    protected $contact;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerTinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress
     */
    public function getAddress() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact
     */
    public function getContact() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact $contact
     *
     * @return self
     */
    public function setContact(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerTinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerTinsItem> $tins
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