<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail extends \ArrayObject
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
     * These are COD Transportation Charges Detail.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailaddTransportationChargesDetail
     */
    protected $addTransportationChargesDetail;
    /**
     * Indicate the party to a transaction including the physical address, contact information and account number information.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipient
     */
    protected $codRecipient;
    /**
     * Specifies the name of person or company receiving the secured or unsecured payment.<br>Example: FedEx
     *
     * @var string
     */
    protected $remitToName;
    /**
     * Indicate the type of funds FedEx should collect upon shipment delivery.
     *
     * @var string
     */
    protected $codCollectionType;
    /**
     * Specify the contact and address details of a location.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddress
     */
    protected $financialInstitutionContactAndAddress;
    /**
     * Indicate the type of reference information to include on the COD return shipping label.
     *
     * @var string
     */
    protected $returnReferenceIndicatorType;
    /**
     * These are COD Transportation Charges Detail.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailaddTransportationChargesDetail
     */
    public function getAddTransportationChargesDetail() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailaddTransportationChargesDetail
    {
        return $this->addTransportationChargesDetail;
    }
    /**
     * These are COD Transportation Charges Detail.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailaddTransportationChargesDetail $addTransportationChargesDetail
     *
     * @return self
     */
    public function setAddTransportationChargesDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailaddTransportationChargesDetail $addTransportationChargesDetail) : self
    {
        $this->initialized['addTransportationChargesDetail'] = true;
        $this->addTransportationChargesDetail = $addTransportationChargesDetail;
        return $this;
    }
    /**
     * Indicate the party to a transaction including the physical address, contact information and account number information.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipient
     */
    public function getCodRecipient() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipient
    {
        return $this->codRecipient;
    }
    /**
     * Indicate the party to a transaction including the physical address, contact information and account number information.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipient $codRecipient
     *
     * @return self
     */
    public function setCodRecipient(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipient $codRecipient) : self
    {
        $this->initialized['codRecipient'] = true;
        $this->codRecipient = $codRecipient;
        return $this;
    }
    /**
     * Specifies the name of person or company receiving the secured or unsecured payment.<br>Example: FedEx
     *
     * @return string
     */
    public function getRemitToName() : string
    {
        return $this->remitToName;
    }
    /**
     * Specifies the name of person or company receiving the secured or unsecured payment.<br>Example: FedEx
     *
     * @param string $remitToName
     *
     * @return self
     */
    public function setRemitToName(string $remitToName) : self
    {
        $this->initialized['remitToName'] = true;
        $this->remitToName = $remitToName;
        return $this;
    }
    /**
     * Indicate the type of funds FedEx should collect upon shipment delivery.
     *
     * @return string
     */
    public function getCodCollectionType() : string
    {
        return $this->codCollectionType;
    }
    /**
     * Indicate the type of funds FedEx should collect upon shipment delivery.
     *
     * @param string $codCollectionType
     *
     * @return self
     */
    public function setCodCollectionType(string $codCollectionType) : self
    {
        $this->initialized['codCollectionType'] = true;
        $this->codCollectionType = $codCollectionType;
        return $this;
    }
    /**
     * Specify the contact and address details of a location.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddress
     */
    public function getFinancialInstitutionContactAndAddress() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddress
    {
        return $this->financialInstitutionContactAndAddress;
    }
    /**
     * Specify the contact and address details of a location.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddress $financialInstitutionContactAndAddress
     *
     * @return self
     */
    public function setFinancialInstitutionContactAndAddress(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddress $financialInstitutionContactAndAddress) : self
    {
        $this->initialized['financialInstitutionContactAndAddress'] = true;
        $this->financialInstitutionContactAndAddress = $financialInstitutionContactAndAddress;
        return $this;
    }
    /**
     * Indicate the type of reference information to include on the COD return shipping label.
     *
     * @return string
     */
    public function getReturnReferenceIndicatorType() : string
    {
        return $this->returnReferenceIndicatorType;
    }
    /**
     * Indicate the type of reference information to include on the COD return shipping label.
     *
     * @param string $returnReferenceIndicatorType
     *
     * @return self
     */
    public function setReturnReferenceIndicatorType(string $returnReferenceIndicatorType) : self
    {
        $this->initialized['returnReferenceIndicatorType'] = true;
        $this->returnReferenceIndicatorType = $returnReferenceIndicatorType;
        return $this;
    }
}