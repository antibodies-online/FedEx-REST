<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail extends \ArrayObject
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
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @var list<ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailCustomerImageUsagesItem>
     */
    protected $customerImageUsages;
    /**
     * Specify the shipping document format.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailDocumentFormat
     */
    protected $documentFormat;
    /**
     * This is certifier specification.
     *
     * @var string
     */
    protected $certifierSpecification;
    /**
     * This is importer specification.
     *
     * @var string
     */
    protected $importerSpecification;
    /**
     * This is producer specification.
     *
     * @var string
     */
    protected $producerSpecification;
    /**
     * 
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducer
     */
    protected $producer;
    /**
     * Specify the job title of the certifier
     *
     * @var string
     */
    protected $certifierJobTitle;
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return list<ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailCustomerImageUsagesItem>
     */
    public function getCustomerImageUsages() : array
    {
        return $this->customerImageUsages;
    }
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param list<ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailCustomerImageUsagesItem> $customerImageUsages
     *
     * @return self
     */
    public function setCustomerImageUsages(array $customerImageUsages) : self
    {
        $this->initialized['customerImageUsages'] = true;
        $this->customerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Specify the shipping document format.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailDocumentFormat
     */
    public function getDocumentFormat() : ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailDocumentFormat $documentFormat) : self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
    /**
     * This is certifier specification.
     *
     * @return string
     */
    public function getCertifierSpecification() : string
    {
        return $this->certifierSpecification;
    }
    /**
     * This is certifier specification.
     *
     * @param string $certifierSpecification
     *
     * @return self
     */
    public function setCertifierSpecification(string $certifierSpecification) : self
    {
        $this->initialized['certifierSpecification'] = true;
        $this->certifierSpecification = $certifierSpecification;
        return $this;
    }
    /**
     * This is importer specification.
     *
     * @return string
     */
    public function getImporterSpecification() : string
    {
        return $this->importerSpecification;
    }
    /**
     * This is importer specification.
     *
     * @param string $importerSpecification
     *
     * @return self
     */
    public function setImporterSpecification(string $importerSpecification) : self
    {
        $this->initialized['importerSpecification'] = true;
        $this->importerSpecification = $importerSpecification;
        return $this;
    }
    /**
     * This is producer specification.
     *
     * @return string
     */
    public function getProducerSpecification() : string
    {
        return $this->producerSpecification;
    }
    /**
     * This is producer specification.
     *
     * @param string $producerSpecification
     *
     * @return self
     */
    public function setProducerSpecification(string $producerSpecification) : self
    {
        $this->initialized['producerSpecification'] = true;
        $this->producerSpecification = $producerSpecification;
        return $this;
    }
    /**
     * 
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducer
     */
    public function getProducer() : ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducer
    {
        return $this->producer;
    }
    /**
     * 
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducer $producer
     *
     * @return self
     */
    public function setProducer(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetailProducer $producer) : self
    {
        $this->initialized['producer'] = true;
        $this->producer = $producer;
        return $this;
    }
    /**
     * Specify the job title of the certifier
     *
     * @return string
     */
    public function getCertifierJobTitle() : string
    {
        return $this->certifierJobTitle;
    }
    /**
     * Specify the job title of the certifier
     *
     * @param string $certifierJobTitle
     *
     * @return self
     */
    public function setCertifierJobTitle(string $certifierJobTitle) : self
    {
        $this->initialized['certifierJobTitle'] = true;
        $this->certifierJobTitle = $certifierJobTitle;
        return $this;
    }
}