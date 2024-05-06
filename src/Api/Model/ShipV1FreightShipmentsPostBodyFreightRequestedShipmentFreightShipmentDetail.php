<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail extends \ArrayObject
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
    * Required<br>
    Indicates the role of the party submitting the transaction.
    *
    * @var string
    */
    protected $role;
    /**
     * Indicates which party will pay surcharges for any special services which support split billing.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailSpecialServicePaymentsItem>
     */
    protected $specialServicePayments;
    /**
     * This is used specify the line item level liability coverage.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetail
     */
    protected $liabilityCoverageDetail;
    /**
    * Conditional
    
    FedEx Freight account number used with FEDEX_FREIGHT_ECONOMY or FEDEX_FREIGHT_PRIORITY  service; required for account-specific Freight rates.This is mandatory for all LTL Freight shipments except Bill To shipments. Note if the shipper is responsible for the transaportation charges, enter the SAME account number in the FedExFreightAccountNumber that is entered in the ShippingChargesPayment/Payor/ResponsibleParty/AccountNumber. If the shipper is not responsible for the transportation charges, enter a valid FedEx Freight Account Number.
    *
    * @var mixed
    */
    protected $fedExFreightAccountNumber;
    /**
     * Indicates the Declared value units<br>Example: LBS
     *
     * @var string
     */
    protected $declaredValueUnits;
    /**
     * Specifies the references to be printed on the invoice.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailPrintedReferencesItem>
     */
    protected $printedReferences;
    /**
     * Indicate the phone number. Only numeric values allowed.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailHazardousMaterialsEmergencyContactNumber
     */
    protected $hazardousMaterialsEmergencyContactNumber;
    /**
    * Required
    
    Class/weight pairs and associated details for a Freight shipment.
    *
    * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem>
    */
    protected $lineItem;
    /**
     * Conditional<br> This is only used for anonymous rate requests<br>Example: 5.12
     *
     * @var float
     */
    protected $clientDiscountPercent;
    /**
     * Coupons<br>Example: [PROMO1, 10offtoday]
     *
     * @var list<string>
     */
    protected $coupons;
    /**
     * Specify the Billing Contact and Address details of the location for above FedEx Freight Account Number.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailFedExFreightBillingContactAndAddress
     */
    protected $fedExFreightBillingContactAndAddress;
    /**
     * Conditional<br>Indicates the LTL Account Alias identifier.<br>Example: 981234
     *
     * @var string
     */
    protected $aliasID;
    /**
     * Indicates the terms of the collect payment for a Freight shipment.
     *
     * @var string
     */
    protected $collectTermsType;
    /**
     * Specifies the Hazardous materials offeror
     *
     * @var string
     */
    protected $hazardousMaterialsOfferor;
    /**
     * Specifies taxes or miscellaneous charge.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailDeclaredValuePerUnit
     */
    protected $declaredValuePerUnit;
    /**
     * Total number of individual handling units in the entire shipment (for unit pricing). May not be negative.<br>Example: 12
     *
     * @var int
     */
    protected $totalHandlingUnits;
    /**
     * The descriptive data for the alternateBilling party for the shipment and their physical location.'
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingParty
     */
    protected $alternateBillingParty;
    /**
    * Required<br>
    Indicates the role of the party submitting the transaction.
    *
    * @return string
    */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
    * Required<br>
    Indicates the role of the party submitting the transaction.
    *
    * @param string $role
    *
    * @return self
    */
    public function setRole(string $role) : self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * Indicates which party will pay surcharges for any special services which support split billing.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailSpecialServicePaymentsItem>
     */
    public function getSpecialServicePayments() : array
    {
        return $this->specialServicePayments;
    }
    /**
     * Indicates which party will pay surcharges for any special services which support split billing.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailSpecialServicePaymentsItem> $specialServicePayments
     *
     * @return self
     */
    public function setSpecialServicePayments(array $specialServicePayments) : self
    {
        $this->initialized['specialServicePayments'] = true;
        $this->specialServicePayments = $specialServicePayments;
        return $this;
    }
    /**
     * This is used specify the line item level liability coverage.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetail
     */
    public function getLiabilityCoverageDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetail
    {
        return $this->liabilityCoverageDetail;
    }
    /**
     * This is used specify the line item level liability coverage.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetail $liabilityCoverageDetail
     *
     * @return self
     */
    public function setLiabilityCoverageDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetail $liabilityCoverageDetail) : self
    {
        $this->initialized['liabilityCoverageDetail'] = true;
        $this->liabilityCoverageDetail = $liabilityCoverageDetail;
        return $this;
    }
    /**
    * Conditional
    
    FedEx Freight account number used with FEDEX_FREIGHT_ECONOMY or FEDEX_FREIGHT_PRIORITY  service; required for account-specific Freight rates.This is mandatory for all LTL Freight shipments except Bill To shipments. Note if the shipper is responsible for the transaportation charges, enter the SAME account number in the FedExFreightAccountNumber that is entered in the ShippingChargesPayment/Payor/ResponsibleParty/AccountNumber. If the shipper is not responsible for the transportation charges, enter a valid FedEx Freight Account Number.
    *
    * @return mixed
    */
    public function getFedExFreightAccountNumber()
    {
        return $this->fedExFreightAccountNumber;
    }
    /**
    * Conditional
    
    FedEx Freight account number used with FEDEX_FREIGHT_ECONOMY or FEDEX_FREIGHT_PRIORITY  service; required for account-specific Freight rates.This is mandatory for all LTL Freight shipments except Bill To shipments. Note if the shipper is responsible for the transaportation charges, enter the SAME account number in the FedExFreightAccountNumber that is entered in the ShippingChargesPayment/Payor/ResponsibleParty/AccountNumber. If the shipper is not responsible for the transportation charges, enter a valid FedEx Freight Account Number.
    *
    * @param mixed $fedExFreightAccountNumber
    *
    * @return self
    */
    public function setFedExFreightAccountNumber($fedExFreightAccountNumber) : self
    {
        $this->initialized['fedExFreightAccountNumber'] = true;
        $this->fedExFreightAccountNumber = $fedExFreightAccountNumber;
        return $this;
    }
    /**
     * Indicates the Declared value units<br>Example: LBS
     *
     * @return string
     */
    public function getDeclaredValueUnits() : string
    {
        return $this->declaredValueUnits;
    }
    /**
     * Indicates the Declared value units<br>Example: LBS
     *
     * @param string $declaredValueUnits
     *
     * @return self
     */
    public function setDeclaredValueUnits(string $declaredValueUnits) : self
    {
        $this->initialized['declaredValueUnits'] = true;
        $this->declaredValueUnits = $declaredValueUnits;
        return $this;
    }
    /**
     * Specifies the references to be printed on the invoice.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailPrintedReferencesItem>
     */
    public function getPrintedReferences() : array
    {
        return $this->printedReferences;
    }
    /**
     * Specifies the references to be printed on the invoice.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailPrintedReferencesItem> $printedReferences
     *
     * @return self
     */
    public function setPrintedReferences(array $printedReferences) : self
    {
        $this->initialized['printedReferences'] = true;
        $this->printedReferences = $printedReferences;
        return $this;
    }
    /**
     * Indicate the phone number. Only numeric values allowed.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailHazardousMaterialsEmergencyContactNumber
     */
    public function getHazardousMaterialsEmergencyContactNumber() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailHazardousMaterialsEmergencyContactNumber
    {
        return $this->hazardousMaterialsEmergencyContactNumber;
    }
    /**
     * Indicate the phone number. Only numeric values allowed.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailHazardousMaterialsEmergencyContactNumber $hazardousMaterialsEmergencyContactNumber
     *
     * @return self
     */
    public function setHazardousMaterialsEmergencyContactNumber(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailHazardousMaterialsEmergencyContactNumber $hazardousMaterialsEmergencyContactNumber) : self
    {
        $this->initialized['hazardousMaterialsEmergencyContactNumber'] = true;
        $this->hazardousMaterialsEmergencyContactNumber = $hazardousMaterialsEmergencyContactNumber;
        return $this;
    }
    /**
    * Required
    
    Class/weight pairs and associated details for a Freight shipment.
    *
    * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem>
    */
    public function getLineItem() : array
    {
        return $this->lineItem;
    }
    /**
    * Required
    
    Class/weight pairs and associated details for a Freight shipment.
    *
    * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLineItemItem> $lineItem
    *
    * @return self
    */
    public function setLineItem(array $lineItem) : self
    {
        $this->initialized['lineItem'] = true;
        $this->lineItem = $lineItem;
        return $this;
    }
    /**
     * Conditional<br> This is only used for anonymous rate requests<br>Example: 5.12
     *
     * @return float
     */
    public function getClientDiscountPercent() : float
    {
        return $this->clientDiscountPercent;
    }
    /**
     * Conditional<br> This is only used for anonymous rate requests<br>Example: 5.12
     *
     * @param float $clientDiscountPercent
     *
     * @return self
     */
    public function setClientDiscountPercent(float $clientDiscountPercent) : self
    {
        $this->initialized['clientDiscountPercent'] = true;
        $this->clientDiscountPercent = $clientDiscountPercent;
        return $this;
    }
    /**
     * Coupons<br>Example: [PROMO1, 10offtoday]
     *
     * @return list<string>
     */
    public function getCoupons() : array
    {
        return $this->coupons;
    }
    /**
     * Coupons<br>Example: [PROMO1, 10offtoday]
     *
     * @param list<string> $coupons
     *
     * @return self
     */
    public function setCoupons(array $coupons) : self
    {
        $this->initialized['coupons'] = true;
        $this->coupons = $coupons;
        return $this;
    }
    /**
     * Specify the Billing Contact and Address details of the location for above FedEx Freight Account Number.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailFedExFreightBillingContactAndAddress
     */
    public function getFedExFreightBillingContactAndAddress() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailFedExFreightBillingContactAndAddress
    {
        return $this->fedExFreightBillingContactAndAddress;
    }
    /**
     * Specify the Billing Contact and Address details of the location for above FedEx Freight Account Number.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailFedExFreightBillingContactAndAddress $fedExFreightBillingContactAndAddress
     *
     * @return self
     */
    public function setFedExFreightBillingContactAndAddress(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailFedExFreightBillingContactAndAddress $fedExFreightBillingContactAndAddress) : self
    {
        $this->initialized['fedExFreightBillingContactAndAddress'] = true;
        $this->fedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;
        return $this;
    }
    /**
     * Conditional<br>Indicates the LTL Account Alias identifier.<br>Example: 981234
     *
     * @return string
     */
    public function getAliasID() : string
    {
        return $this->aliasID;
    }
    /**
     * Conditional<br>Indicates the LTL Account Alias identifier.<br>Example: 981234
     *
     * @param string $aliasID
     *
     * @return self
     */
    public function setAliasID(string $aliasID) : self
    {
        $this->initialized['aliasID'] = true;
        $this->aliasID = $aliasID;
        return $this;
    }
    /**
     * Indicates the terms of the collect payment for a Freight shipment.
     *
     * @return string
     */
    public function getCollectTermsType() : string
    {
        return $this->collectTermsType;
    }
    /**
     * Indicates the terms of the collect payment for a Freight shipment.
     *
     * @param string $collectTermsType
     *
     * @return self
     */
    public function setCollectTermsType(string $collectTermsType) : self
    {
        $this->initialized['collectTermsType'] = true;
        $this->collectTermsType = $collectTermsType;
        return $this;
    }
    /**
     * Specifies the Hazardous materials offeror
     *
     * @return string
     */
    public function getHazardousMaterialsOfferor() : string
    {
        return $this->hazardousMaterialsOfferor;
    }
    /**
     * Specifies the Hazardous materials offeror
     *
     * @param string $hazardousMaterialsOfferor
     *
     * @return self
     */
    public function setHazardousMaterialsOfferor(string $hazardousMaterialsOfferor) : self
    {
        $this->initialized['hazardousMaterialsOfferor'] = true;
        $this->hazardousMaterialsOfferor = $hazardousMaterialsOfferor;
        return $this;
    }
    /**
     * Specifies taxes or miscellaneous charge.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailDeclaredValuePerUnit
     */
    public function getDeclaredValuePerUnit() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailDeclaredValuePerUnit
    {
        return $this->declaredValuePerUnit;
    }
    /**
     * Specifies taxes or miscellaneous charge.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailDeclaredValuePerUnit $declaredValuePerUnit
     *
     * @return self
     */
    public function setDeclaredValuePerUnit(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailDeclaredValuePerUnit $declaredValuePerUnit) : self
    {
        $this->initialized['declaredValuePerUnit'] = true;
        $this->declaredValuePerUnit = $declaredValuePerUnit;
        return $this;
    }
    /**
     * Total number of individual handling units in the entire shipment (for unit pricing). May not be negative.<br>Example: 12
     *
     * @return int
     */
    public function getTotalHandlingUnits() : int
    {
        return $this->totalHandlingUnits;
    }
    /**
     * Total number of individual handling units in the entire shipment (for unit pricing). May not be negative.<br>Example: 12
     *
     * @param int $totalHandlingUnits
     *
     * @return self
     */
    public function setTotalHandlingUnits(int $totalHandlingUnits) : self
    {
        $this->initialized['totalHandlingUnits'] = true;
        $this->totalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    /**
     * The descriptive data for the alternateBilling party for the shipment and their physical location.'
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingParty
     */
    public function getAlternateBillingParty() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingParty
    {
        return $this->alternateBillingParty;
    }
    /**
     * The descriptive data for the alternateBilling party for the shipment and their physical location.'
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingParty $alternateBillingParty
     *
     * @return self
     */
    public function setAlternateBillingParty(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingParty $alternateBillingParty) : self
    {
        $this->initialized['alternateBillingParty'] = true;
        $this->alternateBillingParty = $alternateBillingParty;
        return $this;
    }
}