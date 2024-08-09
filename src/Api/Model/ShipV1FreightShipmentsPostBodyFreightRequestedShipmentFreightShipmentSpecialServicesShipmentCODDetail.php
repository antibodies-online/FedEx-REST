<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetail extends \ArrayObject
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
     * Use this object to specify C.O.D. transportation charges.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail
     */
    protected $addTransportationChargesDetail;
    /**
     * Descriptive data of the Cash On Delivery along with their details of the physical location.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailCodRecipient
     */
    protected $codRecipient;
    /**
     * Specify the name of the person or company receiving the secured/unsecured funds payment.
     *
     * @var string
     */
    protected $remitToName;
    /**
     * Specify the preference type based on funds to be collected by FedEx upon shipment delivery. <br><br> Note: <ul><li>Ground shipments accept only CASH as the COD collection type.</li><li>Express shipments accept ANY and GUARANTEED_FUNDS as the COD collection type.
     *
     * @var string
     */
    protected $codCollectionType;
    /**
     * Specifies the contact and address details of a location.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailFinancialInstitutionContactAndAddress
     */
    protected $financialInstitutionContactAndAddress;
    /**
     * Indicate the COD collection amount.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailCodCollectionAmount
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
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailShipmentCodAmount
     */
    protected $shipmentCodAmount;
    /**
     * Use this object to specify C.O.D. transportation charges.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail
     */
    public function getAddTransportationChargesDetail(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail
    {
        return $this->addTransportationChargesDetail;
    }
    /**
     * Use this object to specify C.O.D. transportation charges.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail $addTransportationChargesDetail
     *
     * @return self
     */
    public function setAddTransportationChargesDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail $addTransportationChargesDetail): self
    {
        $this->initialized['addTransportationChargesDetail'] = true;
        $this->addTransportationChargesDetail = $addTransportationChargesDetail;
        return $this;
    }
    /**
     * Descriptive data of the Cash On Delivery along with their details of the physical location.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailCodRecipient
     */
    public function getCodRecipient(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailCodRecipient
    {
        return $this->codRecipient;
    }
    /**
     * Descriptive data of the Cash On Delivery along with their details of the physical location.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailCodRecipient $codRecipient
     *
     * @return self
     */
    public function setCodRecipient(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailCodRecipient $codRecipient): self
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
    public function getRemitToName(): string
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
    public function setRemitToName(string $remitToName): self
    {
        $this->initialized['remitToName'] = true;
        $this->remitToName = $remitToName;
        return $this;
    }
    /**
     * Specify the preference type based on funds to be collected by FedEx upon shipment delivery. <br><br> Note: <ul><li>Ground shipments accept only CASH as the COD collection type.</li><li>Express shipments accept ANY and GUARANTEED_FUNDS as the COD collection type.
     *
     * @return string
     */
    public function getCodCollectionType(): string
    {
        return $this->codCollectionType;
    }
    /**
     * Specify the preference type based on funds to be collected by FedEx upon shipment delivery. <br><br> Note: <ul><li>Ground shipments accept only CASH as the COD collection type.</li><li>Express shipments accept ANY and GUARANTEED_FUNDS as the COD collection type.
     *
     * @param string $codCollectionType
     *
     * @return self
     */
    public function setCodCollectionType(string $codCollectionType): self
    {
        $this->initialized['codCollectionType'] = true;
        $this->codCollectionType = $codCollectionType;
        return $this;
    }
    /**
     * Specifies the contact and address details of a location.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailFinancialInstitutionContactAndAddress
     */
    public function getFinancialInstitutionContactAndAddress(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailFinancialInstitutionContactAndAddress
    {
        return $this->financialInstitutionContactAndAddress;
    }
    /**
     * Specifies the contact and address details of a location.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailFinancialInstitutionContactAndAddress $financialInstitutionContactAndAddress
     *
     * @return self
     */
    public function setFinancialInstitutionContactAndAddress(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailFinancialInstitutionContactAndAddress $financialInstitutionContactAndAddress): self
    {
        $this->initialized['financialInstitutionContactAndAddress'] = true;
        $this->financialInstitutionContactAndAddress = $financialInstitutionContactAndAddress;
        return $this;
    }
    /**
     * Indicate the COD collection amount.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailCodCollectionAmount
     */
    public function getCodCollectionAmount(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Indicate the COD collection amount.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailCodCollectionAmount $codCollectionAmount): self
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
    public function getReturnReferenceIndicatorType(): string
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
    public function setReturnReferenceIndicatorType(string $returnReferenceIndicatorType): self
    {
        $this->initialized['returnReferenceIndicatorType'] = true;
        $this->returnReferenceIndicatorType = $returnReferenceIndicatorType;
        return $this;
    }
    /**
     * Indicate the COD amount for this shipment.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailShipmentCodAmount
     */
    public function getShipmentCodAmount(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailShipmentCodAmount
    {
        return $this->shipmentCodAmount;
    }
    /**
     * Indicate the COD amount for this shipment.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailShipmentCodAmount $shipmentCodAmount
     *
     * @return self
     */
    public function setShipmentCodAmount(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetailShipmentCodAmount $shipmentCodAmount): self
    {
        $this->initialized['shipmentCodAmount'] = true;
        $this->shipmentCodAmount = $shipmentCodAmount;
        return $this;
    }
}