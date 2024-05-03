<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail extends \ArrayObject
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
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailCustomerImageUsagesItem>
     */
    protected $customerImageUsages;
    /**
     * Specify the shipping document format.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormat
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
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailProducer
     */
    protected $producer;
    /**
     * Date Range for custom delivery request; only used if type is BETWEEN.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod
     */
    protected $blanketPeriod;
    /**
     * Specify the job title of the certifier.
     *
     * @var string
     */
    protected $certifierJobTitle;

    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailCustomerImageUsagesItem>
     */
    public function getCustomerImageUsages(): array
    {
        return $this->customerImageUsages;
    }

    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailCustomerImageUsagesItem> $customerImageUsages
     */
    public function setCustomerImageUsages(array $customerImageUsages): self
    {
        $this->initialized['customerImageUsages'] = true;
        $this->customerImageUsages = $customerImageUsages;

        return $this;
    }

    /**
     * Specify the shipping document format.
     */
    public function getDocumentFormat(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormat
    {
        return $this->documentFormat;
    }

    /**
     * Specify the shipping document format.
     */
    public function setDocumentFormat(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailDocumentFormat $documentFormat): self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;

        return $this;
    }

    /**
     * This is certifier specification.
     */
    public function getCertifierSpecification(): string
    {
        return $this->certifierSpecification;
    }

    /**
     * This is certifier specification.
     */
    public function setCertifierSpecification(string $certifierSpecification): self
    {
        $this->initialized['certifierSpecification'] = true;
        $this->certifierSpecification = $certifierSpecification;

        return $this;
    }

    /**
     * This is importer specification.
     */
    public function getImporterSpecification(): string
    {
        return $this->importerSpecification;
    }

    /**
     * This is importer specification.
     */
    public function setImporterSpecification(string $importerSpecification): self
    {
        $this->initialized['importerSpecification'] = true;
        $this->importerSpecification = $importerSpecification;

        return $this;
    }

    /**
     * This is producer specification.
     */
    public function getProducerSpecification(): string
    {
        return $this->producerSpecification;
    }

    /**
     * This is producer specification.
     */
    public function setProducerSpecification(string $producerSpecification): self
    {
        $this->initialized['producerSpecification'] = true;
        $this->producerSpecification = $producerSpecification;

        return $this;
    }

    public function getProducer(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailProducer
    {
        return $this->producer;
    }

    public function setProducer(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailProducer $producer): self
    {
        $this->initialized['producer'] = true;
        $this->producer = $producer;

        return $this;
    }

    /**
     * Date Range for custom delivery request; only used if type is BETWEEN.
     */
    public function getBlanketPeriod(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod
    {
        return $this->blanketPeriod;
    }

    /**
     * Date Range for custom delivery request; only used if type is BETWEEN.
     */
    public function setBlanketPeriod(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod $blanketPeriod): self
    {
        $this->initialized['blanketPeriod'] = true;
        $this->blanketPeriod = $blanketPeriod;

        return $this;
    }

    /**
     * Specify the job title of the certifier.
     */
    public function getCertifierJobTitle(): string
    {
        return $this->certifierJobTitle;
    }

    /**
     * Specify the job title of the certifier.
     */
    public function setCertifierJobTitle(string $certifierJobTitle): self
    {
        $this->initialized['certifierJobTitle'] = true;
        $this->certifierJobTitle = $certifierJobTitle;

        return $this;
    }
}
