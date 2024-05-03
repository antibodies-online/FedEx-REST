<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetail extends \ArrayObject
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
     * These are the regulatory controls applicable to the shipment.
     *
     * @var list<string>
     */
    protected $regulatoryControls;
    /**
     * Specify broker information. Use this option only if you are using Broker Select Option for your shipment. A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailBrokersItem>
     */
    protected $brokers;
    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommercialInvoice
     */
    protected $commercialInvoice;
    /**
     * Specify the risk owner for the Freight shipment.
     *
     * @var string
     */
    protected $freightOnValue;
    /**
     * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDutiesPayment
     */
    protected $dutiesPayment;
    /**
     * Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItem>
     */
    protected $commodities;
    /**
     * Used to specify if a shipment is document shipment or not. Used only for International Express document shipments. Default value is false.
     *
     * @var bool
     */
    protected $isDocumentOnly;
    /**
     * Use this element to provide valid identification details. Used for populating brazil tax id.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailRecipientCustomsId
     */
    protected $recipientCustomsId;
    /**
     * These are customs Option Detail, type must be indicated for each occurrence.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCustomsOption
     */
    protected $customsOption;
    /**
     * The descriptive data for the importer of Record for the shipment and their physical address, contact and account number information.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailImporterOfRecord
     */
    protected $importerOfRecord;
    /**
     * This is the locale for generated document.<br>Example: en_US<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @var string
     */
    protected $generatedDocumentLocale;
    /**
     * These are export Detail used for US or CA exports.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailExportDetail
     */
    protected $exportDetail;
    /**
     * This is the total customs value.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailTotalCustomsValue
     */
    protected $totalCustomsValue;
    /**
     * Specify if the transacting parties are related.
     *
     * @var bool
     */
    protected $partiesToTransactionAreRelated;
    /**
     * Specifies about the statements to be declared for Customs.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail
     */
    protected $declarationStatementDetail;
    /**
     * Specify insurance charges if applicable. <br><i>Note: FedEx does not provide insurance of any kind.</i>.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailInsuranceCharge
     */
    protected $insuranceCharge;

    /**
     * These are the regulatory controls applicable to the shipment.
     *
     * @return list<string>
     */
    public function getRegulatoryControls(): array
    {
        return $this->regulatoryControls;
    }

    /**
     * These are the regulatory controls applicable to the shipment.
     *
     * @param list<string> $regulatoryControls
     */
    public function setRegulatoryControls(array $regulatoryControls): self
    {
        $this->initialized['regulatoryControls'] = true;
        $this->regulatoryControls = $regulatoryControls;

        return $this;
    }

    /**
     * Specify broker information. Use this option only if you are using Broker Select Option for your shipment. A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailBrokersItem>
     */
    public function getBrokers(): array
    {
        return $this->brokers;
    }

    /**
     * Specify broker information. Use this option only if you are using Broker Select Option for your shipment. A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailBrokersItem> $brokers
     */
    public function setBrokers(array $brokers): self
    {
        $this->initialized['brokers'] = true;
        $this->brokers = $brokers;

        return $this;
    }

    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     */
    public function getCommercialInvoice(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommercialInvoice
    {
        return $this->commercialInvoice;
    }

    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     */
    public function setCommercialInvoice(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommercialInvoice $commercialInvoice): self
    {
        $this->initialized['commercialInvoice'] = true;
        $this->commercialInvoice = $commercialInvoice;

        return $this;
    }

    /**
     * Specify the risk owner for the Freight shipment.
     */
    public function getFreightOnValue(): string
    {
        return $this->freightOnValue;
    }

    /**
     * Specify the risk owner for the Freight shipment.
     */
    public function setFreightOnValue(string $freightOnValue): self
    {
        $this->initialized['freightOnValue'] = true;
        $this->freightOnValue = $freightOnValue;

        return $this;
    }

    /**
     * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments.
     */
    public function getDutiesPayment(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDutiesPayment
    {
        return $this->dutiesPayment;
    }

    /**
     * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments.
     */
    public function setDutiesPayment(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDutiesPayment $dutiesPayment): self
    {
        $this->initialized['dutiesPayment'] = true;
        $this->dutiesPayment = $dutiesPayment;

        return $this;
    }

    /**
     * Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItem>
     */
    public function getCommodities(): array
    {
        return $this->commodities;
    }

    /**
     * Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCommoditiesItem> $commodities
     */
    public function setCommodities(array $commodities): self
    {
        $this->initialized['commodities'] = true;
        $this->commodities = $commodities;

        return $this;
    }

    /**
     * Used to specify if a shipment is document shipment or not. Used only for International Express document shipments. Default value is false.
     */
    public function getIsDocumentOnly(): bool
    {
        return $this->isDocumentOnly;
    }

    /**
     * Used to specify if a shipment is document shipment or not. Used only for International Express document shipments. Default value is false.
     */
    public function setIsDocumentOnly(bool $isDocumentOnly): self
    {
        $this->initialized['isDocumentOnly'] = true;
        $this->isDocumentOnly = $isDocumentOnly;

        return $this;
    }

    /**
     * Use this element to provide valid identification details. Used for populating brazil tax id.
     */
    public function getRecipientCustomsId(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailRecipientCustomsId
    {
        return $this->recipientCustomsId;
    }

    /**
     * Use this element to provide valid identification details. Used for populating brazil tax id.
     */
    public function setRecipientCustomsId(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailRecipientCustomsId $recipientCustomsId): self
    {
        $this->initialized['recipientCustomsId'] = true;
        $this->recipientCustomsId = $recipientCustomsId;

        return $this;
    }

    /**
     * These are customs Option Detail, type must be indicated for each occurrence.
     */
    public function getCustomsOption(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCustomsOption
    {
        return $this->customsOption;
    }

    /**
     * These are customs Option Detail, type must be indicated for each occurrence.
     */
    public function setCustomsOption(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailCustomsOption $customsOption): self
    {
        $this->initialized['customsOption'] = true;
        $this->customsOption = $customsOption;

        return $this;
    }

    /**
     * The descriptive data for the importer of Record for the shipment and their physical address, contact and account number information.
     */
    public function getImporterOfRecord(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailImporterOfRecord
    {
        return $this->importerOfRecord;
    }

    /**
     * The descriptive data for the importer of Record for the shipment and their physical address, contact and account number information.
     */
    public function setImporterOfRecord(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailImporterOfRecord $importerOfRecord): self
    {
        $this->initialized['importerOfRecord'] = true;
        $this->importerOfRecord = $importerOfRecord;

        return $this;
    }

    /**
     * This is the locale for generated document.<br>Example: en_US<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     */
    public function getGeneratedDocumentLocale(): string
    {
        return $this->generatedDocumentLocale;
    }

    /**
     * This is the locale for generated document.<br>Example: en_US<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     */
    public function setGeneratedDocumentLocale(string $generatedDocumentLocale): self
    {
        $this->initialized['generatedDocumentLocale'] = true;
        $this->generatedDocumentLocale = $generatedDocumentLocale;

        return $this;
    }

    /**
     * These are export Detail used for US or CA exports.
     */
    public function getExportDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailExportDetail
    {
        return $this->exportDetail;
    }

    /**
     * These are export Detail used for US or CA exports.
     */
    public function setExportDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailExportDetail $exportDetail): self
    {
        $this->initialized['exportDetail'] = true;
        $this->exportDetail = $exportDetail;

        return $this;
    }

    /**
     * This is the total customs value.
     */
    public function getTotalCustomsValue(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailTotalCustomsValue
    {
        return $this->totalCustomsValue;
    }

    /**
     * This is the total customs value.
     */
    public function setTotalCustomsValue(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailTotalCustomsValue $totalCustomsValue): self
    {
        $this->initialized['totalCustomsValue'] = true;
        $this->totalCustomsValue = $totalCustomsValue;

        return $this;
    }

    /**
     * Specify if the transacting parties are related.
     */
    public function getPartiesToTransactionAreRelated(): bool
    {
        return $this->partiesToTransactionAreRelated;
    }

    /**
     * Specify if the transacting parties are related.
     */
    public function setPartiesToTransactionAreRelated(bool $partiesToTransactionAreRelated): self
    {
        $this->initialized['partiesToTransactionAreRelated'] = true;
        $this->partiesToTransactionAreRelated = $partiesToTransactionAreRelated;

        return $this;
    }

    /**
     * Specifies about the statements to be declared for Customs.
     */
    public function getDeclarationStatementDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail
    {
        return $this->declarationStatementDetail;
    }

    /**
     * Specifies about the statements to be declared for Customs.
     */
    public function setDeclarationStatementDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail $declarationStatementDetail): self
    {
        $this->initialized['declarationStatementDetail'] = true;
        $this->declarationStatementDetail = $declarationStatementDetail;

        return $this;
    }

    /**
     * Specify insurance charges if applicable. <br><i>Note: FedEx does not provide insurance of any kind.</i>.
     */
    public function getInsuranceCharge(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailInsuranceCharge
    {
        return $this->insuranceCharge;
    }

    /**
     * Specify insurance charges if applicable. <br><i>Note: FedEx does not provide insurance of any kind.</i>.
     */
    public function setInsuranceCharge(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailInsuranceCharge $insuranceCharge): self
    {
        $this->initialized['insuranceCharge'] = true;
        $this->insuranceCharge = $insuranceCharge;

        return $this;
    }
}