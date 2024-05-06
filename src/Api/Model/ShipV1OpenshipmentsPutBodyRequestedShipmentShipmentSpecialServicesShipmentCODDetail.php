<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail extends \ArrayObject
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
     * Use this object to specify C.O.D. transportation charges.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail
     */
    protected $addTransportationChargesDetail;
    /**
     * Descriptive data of the Cash On Delivery along with their details of the physical location.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient
     */
    protected $codRecipient;
    /**
     * Specify the name of the person or company receiving the secured/unsecured funds payment.
     *
     * @var string
     */
    protected $remitToName;
    /**
     * Identifies the type of funds FedEx should collect upon shipment delivery
     *
     * @var string
     */
    protected $codCollectionType;
    /**
     * Specifies the contact and address details of a location.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailFinancialInstitutionContactAndAddress
     */
    protected $financialInstitutionContactAndAddress;
    /**
     * Indicate the COD collection amount.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodCollectionAmount
     */
    protected $codCollectionAmount;
    /**
     * Indicate return reference type information to include on the COD return shipping label.
     *
     * @var string
     */
    protected $returnReferenceIndicatorType;
    /**
     * Indicate the COD amount for this shipment.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailShipmentCodAmount
     */
    protected $shipmentCodAmount;
    /**
     * Use this object to specify C.O.D. transportation charges.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail
     */
    public function getAddTransportationChargesDetail() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail
    {
        return $this->addTransportationChargesDetail;
    }
    /**
     * Use this object to specify C.O.D. transportation charges.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail $addTransportationChargesDetail
     *
     * @return self
     */
    public function setAddTransportationChargesDetail(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail $addTransportationChargesDetail) : self
    {
        $this->initialized['addTransportationChargesDetail'] = true;
        $this->addTransportationChargesDetail = $addTransportationChargesDetail;
        return $this;
    }
    /**
     * Descriptive data of the Cash On Delivery along with their details of the physical location.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient
     */
    public function getCodRecipient() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient
    {
        return $this->codRecipient;
    }
    /**
     * Descriptive data of the Cash On Delivery along with their details of the physical location.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient $codRecipient
     *
     * @return self
     */
    public function setCodRecipient(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient $codRecipient) : self
    {
        $this->initialized['codRecipient'] = true;
        $this->codRecipient = $codRecipient;
        return $this;
    }
    /**
     * Specify the name of the person or company receiving the secured/unsecured funds payment.
     *
     * @return string
     */
    public function getRemitToName() : string
    {
        return $this->remitToName;
    }
    /**
     * Specify the name of the person or company receiving the secured/unsecured funds payment.
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
     * Identifies the type of funds FedEx should collect upon shipment delivery
     *
     * @return string
     */
    public function getCodCollectionType() : string
    {
        return $this->codCollectionType;
    }
    /**
     * Identifies the type of funds FedEx should collect upon shipment delivery
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
     * Specifies the contact and address details of a location.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailFinancialInstitutionContactAndAddress
     */
    public function getFinancialInstitutionContactAndAddress() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailFinancialInstitutionContactAndAddress
    {
        return $this->financialInstitutionContactAndAddress;
    }
    /**
     * Specifies the contact and address details of a location.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailFinancialInstitutionContactAndAddress $financialInstitutionContactAndAddress
     *
     * @return self
     */
    public function setFinancialInstitutionContactAndAddress(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailFinancialInstitutionContactAndAddress $financialInstitutionContactAndAddress) : self
    {
        $this->initialized['financialInstitutionContactAndAddress'] = true;
        $this->financialInstitutionContactAndAddress = $financialInstitutionContactAndAddress;
        return $this;
    }
    /**
     * Indicate the COD collection amount.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodCollectionAmount
     */
    public function getCodCollectionAmount() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Indicate the COD collection amount.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodCollectionAmount $codCollectionAmount) : self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
    /**
     * Indicate return reference type information to include on the COD return shipping label.
     *
     * @return string
     */
    public function getReturnReferenceIndicatorType() : string
    {
        return $this->returnReferenceIndicatorType;
    }
    /**
     * Indicate return reference type information to include on the COD return shipping label.
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
    /**
     * Indicate the COD amount for this shipment.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailShipmentCodAmount
     */
    public function getShipmentCodAmount() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailShipmentCodAmount
    {
        return $this->shipmentCodAmount;
    }
    /**
     * Indicate the COD amount for this shipment.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailShipmentCodAmount $shipmentCodAmount
     *
     * @return self
     */
    public function setShipmentCodAmount(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailShipmentCodAmount $shipmentCodAmount) : self
    {
        $this->initialized['shipmentCodAmount'] = true;
        $this->shipmentCodAmount = $shipmentCodAmount;
        return $this;
    }
}