<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetail extends \ArrayObject
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
     * These are the regulatory controls applicable to the shipment.
     *
     * @var list<string>
     */
    protected $regulatoryControls;
    /**
     * Specify broker information. Use this option only if you are using Broker Select Option for your shipment. A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * @var list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItem>
     */
    protected $brokers;
    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice
     */
    protected $commercialInvoice;
    /**
     * Specify the risk owner for the Freight shipment.
     *
     * @var string
     */
    protected $freightOnValue;
    /**
     * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPayment
     */
    protected $dutiesPayment;
    /**
     * Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     *
     * @var list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem>
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
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId
     */
    protected $recipientCustomsId;
    /**
     * These are customs Option Detail, type must be indicated for each occurrence.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption
     */
    protected $customsOption;
    /**
     * The descriptive data for the importer of Record for the shipment and their physical address, contact and account number information.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord
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
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail
     */
    protected $exportDetail;
    /**
     * This is the total customs value.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailTotalCustomsValue
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
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail
     */
    protected $declarationStatementDetail;
    /**
     * Specify insurance charges if applicable. <br><i>Note: FedEx does not provide insurance of any kind.</i>
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailInsuranceCharge
     */
    protected $insuranceCharge;
    /**
     * These are the regulatory controls applicable to the shipment.
     *
     * @return list<string>
     */
    public function getRegulatoryControls() : array
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
    public function setRegulatoryControls(array $regulatoryControls) : self
    {
        $this->initialized['regulatoryControls'] = true;
        $this->regulatoryControls = $regulatoryControls;
        return $this;
    }
    /**
     * Specify broker information. Use this option only if you are using Broker Select Option for your shipment. A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * @return list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItem>
     */
    public function getBrokers() : array
    {
        return $this->brokers;
    }
    /**
     * Specify broker information. Use this option only if you are using Broker Select Option for your shipment. A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * @param list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItem> $brokers
     *
     * @return self
     */
    public function setBrokers(array $brokers) : self
    {
        $this->initialized['brokers'] = true;
        $this->brokers = $brokers;
        return $this;
    }
    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice
     */
    public function getCommercialInvoice() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice
    {
        return $this->commercialInvoice;
    }
    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice $commercialInvoice
     *
     * @return self
     */
    public function setCommercialInvoice(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoice $commercialInvoice) : self
    {
        $this->initialized['commercialInvoice'] = true;
        $this->commercialInvoice = $commercialInvoice;
        return $this;
    }
    /**
     * Specify the risk owner for the Freight shipment.
     *
     * @return string
     */
    public function getFreightOnValue() : string
    {
        return $this->freightOnValue;
    }
    /**
     * Specify the risk owner for the Freight shipment.
     *
     * @param string $freightOnValue
     *
     * @return self
     */
    public function setFreightOnValue(string $freightOnValue) : self
    {
        $this->initialized['freightOnValue'] = true;
        $this->freightOnValue = $freightOnValue;
        return $this;
    }
    /**
     * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPayment
     */
    public function getDutiesPayment() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPayment
    {
        return $this->dutiesPayment;
    }
    /**
     * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPayment $dutiesPayment
     *
     * @return self
     */
    public function setDutiesPayment(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPayment $dutiesPayment) : self
    {
        $this->initialized['dutiesPayment'] = true;
        $this->dutiesPayment = $dutiesPayment;
        return $this;
    }
    /**
     * Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     *
     * @return list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem>
     */
    public function getCommodities() : array
    {
        return $this->commodities;
    }
    /**
     * Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     *
     * @param list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem> $commodities
     *
     * @return self
     */
    public function setCommodities(array $commodities) : self
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
    public function getIsDocumentOnly() : bool
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
    public function setIsDocumentOnly(bool $isDocumentOnly) : self
    {
        $this->initialized['isDocumentOnly'] = true;
        $this->isDocumentOnly = $isDocumentOnly;
        return $this;
    }
    /**
     * Use this element to provide valid identification details. Used for populating brazil tax id.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId
     */
    public function getRecipientCustomsId() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId
    {
        return $this->recipientCustomsId;
    }
    /**
     * Use this element to provide valid identification details. Used for populating brazil tax id.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId $recipientCustomsId
     *
     * @return self
     */
    public function setRecipientCustomsId(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailRecipientCustomsId $recipientCustomsId) : self
    {
        $this->initialized['recipientCustomsId'] = true;
        $this->recipientCustomsId = $recipientCustomsId;
        return $this;
    }
    /**
     * These are customs Option Detail, type must be indicated for each occurrence.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption
     */
    public function getCustomsOption() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption
    {
        return $this->customsOption;
    }
    /**
     * These are customs Option Detail, type must be indicated for each occurrence.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption $customsOption
     *
     * @return self
     */
    public function setCustomsOption(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCustomsOption $customsOption) : self
    {
        $this->initialized['customsOption'] = true;
        $this->customsOption = $customsOption;
        return $this;
    }
    /**
     * The descriptive data for the importer of Record for the shipment and their physical address, contact and account number information.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord
     */
    public function getImporterOfRecord() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord
    {
        return $this->importerOfRecord;
    }
    /**
     * The descriptive data for the importer of Record for the shipment and their physical address, contact and account number information.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord $importerOfRecord
     *
     * @return self
     */
    public function setImporterOfRecord(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord $importerOfRecord) : self
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
    public function getGeneratedDocumentLocale() : string
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
    public function setGeneratedDocumentLocale(string $generatedDocumentLocale) : self
    {
        $this->initialized['generatedDocumentLocale'] = true;
        $this->generatedDocumentLocale = $generatedDocumentLocale;
        return $this;
    }
    /**
     * These are export Detail used for US or CA exports.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail
     */
    public function getExportDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail
    {
        return $this->exportDetail;
    }
    /**
     * These are export Detail used for US or CA exports.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail $exportDetail
     *
     * @return self
     */
    public function setExportDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailExportDetail $exportDetail) : self
    {
        $this->initialized['exportDetail'] = true;
        $this->exportDetail = $exportDetail;
        return $this;
    }
    /**
     * This is the total customs value.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailTotalCustomsValue
     */
    public function getTotalCustomsValue() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailTotalCustomsValue
    {
        return $this->totalCustomsValue;
    }
    /**
     * This is the total customs value.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailTotalCustomsValue $totalCustomsValue
     *
     * @return self
     */
    public function setTotalCustomsValue(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailTotalCustomsValue $totalCustomsValue) : self
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
    public function getPartiesToTransactionAreRelated() : bool
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
    public function setPartiesToTransactionAreRelated(bool $partiesToTransactionAreRelated) : self
    {
        $this->initialized['partiesToTransactionAreRelated'] = true;
        $this->partiesToTransactionAreRelated = $partiesToTransactionAreRelated;
        return $this;
    }
    /**
     * Specifies about the statements to be declared for Customs. 
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail
     */
    public function getDeclarationStatementDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail
    {
        return $this->declarationStatementDetail;
    }
    /**
     * Specifies about the statements to be declared for Customs. 
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail $declarationStatementDetail
     *
     * @return self
     */
    public function setDeclarationStatementDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail $declarationStatementDetail) : self
    {
        $this->initialized['declarationStatementDetail'] = true;
        $this->declarationStatementDetail = $declarationStatementDetail;
        return $this;
    }
    /**
     * Specify insurance charges if applicable. <br><i>Note: FedEx does not provide insurance of any kind.</i>
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailInsuranceCharge
     */
    public function getInsuranceCharge() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailInsuranceCharge
    {
        return $this->insuranceCharge;
    }
    /**
     * Specify insurance charges if applicable. <br><i>Note: FedEx does not provide insurance of any kind.</i>
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailInsuranceCharge $insuranceCharge
     *
     * @return self
     */
    public function setInsuranceCharge(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailInsuranceCharge $insuranceCharge) : self
    {
        $this->initialized['insuranceCharge'] = true;
        $this->insuranceCharge = $insuranceCharge;
        return $this;
    }
}