<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetail extends \ArrayObject
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
     * These are the Regulatory Controls applicable to the shipment.
     *
     * @var list<string>
     */
    protected $regulatoryControls;
    /**
     * Specify Insurance charges if applicable.<br><i>Note: FedEx does not provide insurance of any kind</i>.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailinsuranceCharges
     */
    protected $insuranceCharges;
    /**
     * The descriptive data for the importer of Record for the shipment and account number information.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailimporterOfRecordAccountNumber
     */
    protected $importerOfRecordAccountNumber;
    /**
     * Customs value for this commodity.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcustomsValue
     */
    protected $customsValue;
    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     *
     * @var GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoice
     */
    protected $commercialInvoice;
    /**
     * 
     *
     * @var list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem>
     */
    protected $commodities;
    /**
     * Defaults to COMMODITY. Only used for int'l Express requests to indicate if just documents are being shipped or not.
     *
     * @var string
     */
    protected $documentContent;
    /**
     * These are the Regulatory Controls applicable to the shipment.
     *
     * @return list<string>
     */
    public function getRegulatoryControls() : array
    {
        return $this->regulatoryControls;
    }
    /**
     * These are the Regulatory Controls applicable to the shipment.
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
     * Specify Insurance charges if applicable.<br><i>Note: FedEx does not provide insurance of any kind</i>.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailinsuranceCharges
     */
    public function getInsuranceCharges() : GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailinsuranceCharges
    {
        return $this->insuranceCharges;
    }
    /**
     * Specify Insurance charges if applicable.<br><i>Note: FedEx does not provide insurance of any kind</i>.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailinsuranceCharges $insuranceCharges
     *
     * @return self
     */
    public function setInsuranceCharges(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailinsuranceCharges $insuranceCharges) : self
    {
        $this->initialized['insuranceCharges'] = true;
        $this->insuranceCharges = $insuranceCharges;
        return $this;
    }
    /**
     * The descriptive data for the importer of Record for the shipment and account number information.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailimporterOfRecordAccountNumber
     */
    public function getImporterOfRecordAccountNumber() : GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailimporterOfRecordAccountNumber
    {
        return $this->importerOfRecordAccountNumber;
    }
    /**
     * The descriptive data for the importer of Record for the shipment and account number information.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailimporterOfRecordAccountNumber $importerOfRecordAccountNumber
     *
     * @return self
     */
    public function setImporterOfRecordAccountNumber(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailimporterOfRecordAccountNumber $importerOfRecordAccountNumber) : self
    {
        $this->initialized['importerOfRecordAccountNumber'] = true;
        $this->importerOfRecordAccountNumber = $importerOfRecordAccountNumber;
        return $this;
    }
    /**
     * Customs value for this commodity.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcustomsValue
     */
    public function getCustomsValue() : GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcustomsValue
    {
        return $this->customsValue;
    }
    /**
     * Customs value for this commodity.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcustomsValue $customsValue
     *
     * @return self
     */
    public function setCustomsValue(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcustomsValue $customsValue) : self
    {
        $this->initialized['customsValue'] = true;
        $this->customsValue = $customsValue;
        return $this;
    }
    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     *
     * @return GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoice
     */
    public function getCommercialInvoice() : GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoice
    {
        return $this->commercialInvoice;
    }
    /**
     * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     *
     * @param GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoice $commercialInvoice
     *
     * @return self
     */
    public function setCommercialInvoice(GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommercialInvoice $commercialInvoice) : self
    {
        $this->initialized['commercialInvoice'] = true;
        $this->commercialInvoice = $commercialInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem>
     */
    public function getCommodities() : array
    {
        return $this->commodities;
    }
    /**
     * 
     *
     * @param list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItem> $commodities
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
     * Defaults to COMMODITY. Only used for int'l Express requests to indicate if just documents are being shipped or not.
     *
     * @return string
     */
    public function getDocumentContent() : string
    {
        return $this->documentContent;
    }
    /**
     * Defaults to COMMODITY. Only used for int'l Express requests to indicate if just documents are being shipped or not.
     *
     * @param string $documentContent
     *
     * @return self
     */
    public function setDocumentContent(string $documentContent) : self
    {
        $this->initialized['documentContent'] = true;
        $this->documentContent = $documentContent;
        return $this;
    }
}