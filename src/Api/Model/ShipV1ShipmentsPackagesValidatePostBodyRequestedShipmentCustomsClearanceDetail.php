<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetail extends \ArrayObject
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
     * @var list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItem>
     */
    protected $brokers;
    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice
     */
    protected $commercialInvoice;
    /**
     * Specify the risk owner for the Freight shipment.This element is only mandatory or valid for Intra India shipments.
     *
     * @var string
     */
    protected $freightOnValue;
    /**
     * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPayment
     */
    protected $dutiesPayment;
    /**
     * Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     *
     * @var list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem>
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId
     */
    protected $recipientCustomsId;
    /**
     * These are customs Option Detail, type must be indicated for each occurrence.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption
     */
    protected $customsOption;
    /**
     * The descriptive data for the importer of Record for the shipment and their physical address, contact and account number information.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail
     */
    protected $exportDetail;
    /**
     * This is the total customs value.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailTotalCustomsValue
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail
     */
    protected $declarationStatementDetail;
    /**
     * Specify insurance charges if applicable. <br><i>Note: FedEx does not provide insurance of any kind.</i>
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailInsuranceCharge
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
     *
     * @return self
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
     * @return list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItem>
     */
    public function getBrokers(): array
    {
        return $this->brokers;
    }
    /**
     * Specify broker information. Use this option only if you are using Broker Select Option for your shipment. A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItem> $brokers
     *
     * @return self
     */
    public function setBrokers(array $brokers): self
    {
        $this->initialized['brokers'] = true;
        $this->brokers = $brokers;
        return $this;
    }
    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice
     */
    public function getCommercialInvoice(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice
    {
        return $this->commercialInvoice;
    }
    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice $commercialInvoice
     *
     * @return self
     */
    public function setCommercialInvoice(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice $commercialInvoice): self
    {
        $this->initialized['commercialInvoice'] = true;
        $this->commercialInvoice = $commercialInvoice;
        return $this;
    }
    /**
     * Specify the risk owner for the Freight shipment.This element is only mandatory or valid for Intra India shipments.
     *
     * @return string
     */
    public function getFreightOnValue(): string
    {
        return $this->freightOnValue;
    }
    /**
     * Specify the risk owner for the Freight shipment.This element is only mandatory or valid for Intra India shipments.
     *
     * @param string $freightOnValue
     *
     * @return self
     */
    public function setFreightOnValue(string $freightOnValue): self
    {
        $this->initialized['freightOnValue'] = true;
        $this->freightOnValue = $freightOnValue;
        return $this;
    }
    /**
     * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPayment
     */
    public function getDutiesPayment(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPayment
    {
        return $this->dutiesPayment;
    }
    /**
     * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPayment $dutiesPayment
     *
     * @return self
     */
    public function setDutiesPayment(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPayment $dutiesPayment): self
    {
        $this->initialized['dutiesPayment'] = true;
        $this->dutiesPayment = $dutiesPayment;
        return $this;
    }
    /**
     * Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     *
     * @return list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem>
     */
    public function getCommodities(): array
    {
        return $this->commodities;
    }
    /**
     * Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem> $commodities
     *
     * @return self
     */
    public function setCommodities(array $commodities): self
    {
        $this->initialized['commodities'] = true;
        $this->commodities = $commodities;
        return $this;
    }
    /**
     * Used to specify if a shipment is document shipment or not. Used only for International Express document shipments. Default value is false.
     *
     * @return bool
     */
    public function getIsDocumentOnly(): bool
    {
        return $this->isDocumentOnly;
    }
    /**
     * Used to specify if a shipment is document shipment or not. Used only for International Express document shipments. Default value is false.
     *
     * @param bool $isDocumentOnly
     *
     * @return self
     */
    public function setIsDocumentOnly(bool $isDocumentOnly): self
    {
        $this->initialized['isDocumentOnly'] = true;
        $this->isDocumentOnly = $isDocumentOnly;
        return $this;
    }
    /**
     * Use this element to provide valid identification details. Used for populating brazil tax id.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId
     */
    public function getRecipientCustomsId(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId
    {
        return $this->recipientCustomsId;
    }
    /**
     * Use this element to provide valid identification details. Used for populating brazil tax id.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId $recipientCustomsId
     *
     * @return self
     */
    public function setRecipientCustomsId(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId $recipientCustomsId): self
    {
        $this->initialized['recipientCustomsId'] = true;
        $this->recipientCustomsId = $recipientCustomsId;
        return $this;
    }
    /**
     * These are customs Option Detail, type must be indicated for each occurrence.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption
     */
    public function getCustomsOption(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption
    {
        return $this->customsOption;
    }
    /**
     * These are customs Option Detail, type must be indicated for each occurrence.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption $customsOption
     *
     * @return self
     */
    public function setCustomsOption(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption $customsOption): self
    {
        $this->initialized['customsOption'] = true;
        $this->customsOption = $customsOption;
        return $this;
    }
    /**
     * The descriptive data for the importer of Record for the shipment and their physical address, contact and account number information.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord
     */
    public function getImporterOfRecord(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord
    {
        return $this->importerOfRecord;
    }
    /**
     * The descriptive data for the importer of Record for the shipment and their physical address, contact and account number information.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord $importerOfRecord
     *
     * @return self
     */
    public function setImporterOfRecord(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord $importerOfRecord): self
    {
        $this->initialized['importerOfRecord'] = true;
        $this->importerOfRecord = $importerOfRecord;
        return $this;
    }
    /**
     * This is the locale for generated document.<br>Example: en_US<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @return string
     */
    public function getGeneratedDocumentLocale(): string
    {
        return $this->generatedDocumentLocale;
    }
    /**
     * This is the locale for generated document.<br>Example: en_US<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @param string $generatedDocumentLocale
     *
     * @return self
     */
    public function setGeneratedDocumentLocale(string $generatedDocumentLocale): self
    {
        $this->initialized['generatedDocumentLocale'] = true;
        $this->generatedDocumentLocale = $generatedDocumentLocale;
        return $this;
    }
    /**
     * These are export Detail used for US or CA exports.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail
     */
    public function getExportDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail
    {
        return $this->exportDetail;
    }
    /**
     * These are export Detail used for US or CA exports.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail $exportDetail
     *
     * @return self
     */
    public function setExportDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail $exportDetail): self
    {
        $this->initialized['exportDetail'] = true;
        $this->exportDetail = $exportDetail;
        return $this;
    }
    /**
     * This is the total customs value.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailTotalCustomsValue
     */
    public function getTotalCustomsValue(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailTotalCustomsValue
    {
        return $this->totalCustomsValue;
    }
    /**
     * This is the total customs value.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailTotalCustomsValue $totalCustomsValue
     *
     * @return self
     */
    public function setTotalCustomsValue(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailTotalCustomsValue $totalCustomsValue): self
    {
        $this->initialized['totalCustomsValue'] = true;
        $this->totalCustomsValue = $totalCustomsValue;
        return $this;
    }
    /**
     * Specify if the transacting parties are related.
     *
     * @return bool
     */
    public function getPartiesToTransactionAreRelated(): bool
    {
        return $this->partiesToTransactionAreRelated;
    }
    /**
     * Specify if the transacting parties are related.
     *
     * @param bool $partiesToTransactionAreRelated
     *
     * @return self
     */
    public function setPartiesToTransactionAreRelated(bool $partiesToTransactionAreRelated): self
    {
        $this->initialized['partiesToTransactionAreRelated'] = true;
        $this->partiesToTransactionAreRelated = $partiesToTransactionAreRelated;
        return $this;
    }
    /**
     * Specifies about the statements to be declared for Customs. 
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail
     */
    public function getDeclarationStatementDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail
    {
        return $this->declarationStatementDetail;
    }
    /**
     * Specifies about the statements to be declared for Customs. 
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail $declarationStatementDetail
     *
     * @return self
     */
    public function setDeclarationStatementDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail $declarationStatementDetail): self
    {
        $this->initialized['declarationStatementDetail'] = true;
        $this->declarationStatementDetail = $declarationStatementDetail;
        return $this;
    }
    /**
     * Specify insurance charges if applicable. <br><i>Note: FedEx does not provide insurance of any kind.</i>
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailInsuranceCharge
     */
    public function getInsuranceCharge(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailInsuranceCharge
    {
        return $this->insuranceCharge;
    }
    /**
     * Specify insurance charges if applicable. <br><i>Note: FedEx does not provide insurance of any kind.</i>
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailInsuranceCharge $insuranceCharge
     *
     * @return self
     */
    public function setInsuranceCharge(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailInsuranceCharge $insuranceCharge): self
    {
        $this->initialized['insuranceCharge'] = true;
        $this->insuranceCharge = $insuranceCharge;
        return $this;
    }
}