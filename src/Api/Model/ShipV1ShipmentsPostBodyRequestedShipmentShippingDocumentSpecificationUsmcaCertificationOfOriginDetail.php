<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail extends \ArrayObject
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
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailCustomerImageUsagesItem>
     */
    protected $customerImageUsages;
    /**
     * Specify the shipping document format.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormat
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
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailProducer
     */
    protected $producer;
    /**
     * Date Range for custom delivery request; only used if type is BETWEEN.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod
     */
    protected $blanketPeriod;
    /**
     * Specify the job title of the certifier
     *
     * @var string
     */
    protected $certifierJobTitle;
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailCustomerImageUsagesItem>
     */
    public function getCustomerImageUsages(): array
    {
        return $this->customerImageUsages;
    }
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailCustomerImageUsagesItem> $customerImageUsages
     *
     * @return self
     */
    public function setCustomerImageUsages(array $customerImageUsages): self
    {
        $this->initialized['customerImageUsages'] = true;
        $this->customerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Specify the shipping document format.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormat
     */
    public function getDocumentFormat(): ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormat $documentFormat): self
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
    public function getCertifierSpecification(): string
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
    public function setCertifierSpecification(string $certifierSpecification): self
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
    public function getImporterSpecification(): string
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
    public function setImporterSpecification(string $importerSpecification): self
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
    public function getProducerSpecification(): string
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
    public function setProducerSpecification(string $producerSpecification): self
    {
        $this->initialized['producerSpecification'] = true;
        $this->producerSpecification = $producerSpecification;
        return $this;
    }
    /**
     * 
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailProducer
     */
    public function getProducer(): ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailProducer
    {
        return $this->producer;
    }
    /**
     * 
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailProducer $producer
     *
     * @return self
     */
    public function setProducer(ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailProducer $producer): self
    {
        $this->initialized['producer'] = true;
        $this->producer = $producer;
        return $this;
    }
    /**
     * Date Range for custom delivery request; only used if type is BETWEEN.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod
     */
    public function getBlanketPeriod(): ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod
    {
        return $this->blanketPeriod;
    }
    /**
     * Date Range for custom delivery request; only used if type is BETWEEN.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod $blanketPeriod
     *
     * @return self
     */
    public function setBlanketPeriod(ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod $blanketPeriod): self
    {
        $this->initialized['blanketPeriod'] = true;
        $this->blanketPeriod = $blanketPeriod;
        return $this;
    }
    /**
     * Specify the job title of the certifier
     *
     * @return string
     */
    public function getCertifierJobTitle(): string
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
    public function setCertifierJobTitle(string $certifierJobTitle): self
    {
        $this->initialized['certifierJobTitle'] = true;
        $this->certifierJobTitle = $certifierJobTitle;
        return $this;
    }
}