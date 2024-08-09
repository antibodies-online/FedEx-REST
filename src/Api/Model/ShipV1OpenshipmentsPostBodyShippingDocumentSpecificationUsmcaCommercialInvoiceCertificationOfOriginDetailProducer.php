<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducer extends \ArrayObject
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
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact
     */
    protected $contact;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerTinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress
     */
    public function getAddress(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact
     */
    public function getContact(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact $contact
     *
     * @return self
     */
    public function setContact(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerTinsItem>
     */
    public function getTins(): array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducerTinsItem> $tins
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