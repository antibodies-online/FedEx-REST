<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetail extends \ArrayObject
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
     * Indicates the role of the party submitting the transaction.
     *
     * @var string
     */
    protected $role;
    /**
    * 
    Account number used with FedEx Freight services. Required for account-specific freight rates.
    *
    * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailaccountNumber
    */
    protected $accountNumber;
    /**
     * This is the declared value per unit. Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @var string
     */
    protected $declaredValueUnits;
    /**
     * Indicates the Shipment Dimensions Value.
     *
     * @var mixed
     */
    protected $shipmentDimensions;
    /**
     * Details of the commodities in the shipment.
     *
     * @var list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItem>
     */
    protected $lineItem;
    /**
     * This is only used for anonymous rate requests.
     *
     * @var float
     */
    protected $clientDiscountPercent;
    /**
     * Indicates the billing address used to validate FedEx Freight account on the bill of lading..
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddress
     */
    protected $fedExFreightBillingContactAndAddress;
    /**
     * Alternate unique identifier assigned to this a line item.
     *
     * @var string
     */
    protected $aliasID;
    /**
     * Specifies the hazardous materials offeror.
     *
     * @var string
     */
    protected $hazardousMaterialsOfferor;
    /**
    * 
    This is the declared value per unit. Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
    *
    * @var mixed
    */
    protected $declaredValuePerUnit;
    /**
     * Total number of individual handling units in the entire shipment (for unit pricing). May not be negative.
     *
     * @var int
     */
    protected $totalHandlingUnits;
    /**
     * Specify alternate billing party details. <br>Note: These details are required when paymentType selected as THIRD_PARTY.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingParty
     */
    protected $alternateBillingParty;
    /**
     * Indicates the role of the party submitting the transaction.
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * Indicates the role of the party submitting the transaction.
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
    * 
    Account number used with FedEx Freight services. Required for account-specific freight rates.
    *
    * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailaccountNumber
    */
    public function getAccountNumber() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailaccountNumber
    {
        return $this->accountNumber;
    }
    /**
    * 
    Account number used with FedEx Freight services. Required for account-specific freight rates.
    *
    * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailaccountNumber $accountNumber
    *
    * @return self
    */
    public function setAccountNumber(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailaccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the declared value per unit. Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @return string
     */
    public function getDeclaredValueUnits() : string
    {
        return $this->declaredValueUnits;
    }
    /**
     * This is the declared value per unit. Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
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
     * Indicates the Shipment Dimensions Value.
     *
     * @return mixed
     */
    public function getShipmentDimensions()
    {
        return $this->shipmentDimensions;
    }
    /**
     * Indicates the Shipment Dimensions Value.
     *
     * @param mixed $shipmentDimensions
     *
     * @return self
     */
    public function setShipmentDimensions($shipmentDimensions) : self
    {
        $this->initialized['shipmentDimensions'] = true;
        $this->shipmentDimensions = $shipmentDimensions;
        return $this;
    }
    /**
     * Details of the commodities in the shipment.
     *
     * @return list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItem>
     */
    public function getLineItem() : array
    {
        return $this->lineItem;
    }
    /**
     * Details of the commodities in the shipment.
     *
     * @param list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItem> $lineItem
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
     * This is only used for anonymous rate requests.
     *
     * @return float
     */
    public function getClientDiscountPercent() : float
    {
        return $this->clientDiscountPercent;
    }
    /**
     * This is only used for anonymous rate requests.
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
     * Indicates the billing address used to validate FedEx Freight account on the bill of lading..
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddress
     */
    public function getFedExFreightBillingContactAndAddress() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddress
    {
        return $this->fedExFreightBillingContactAndAddress;
    }
    /**
     * Indicates the billing address used to validate FedEx Freight account on the bill of lading..
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddress $fedExFreightBillingContactAndAddress
     *
     * @return self
     */
    public function setFedExFreightBillingContactAndAddress(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddress $fedExFreightBillingContactAndAddress) : self
    {
        $this->initialized['fedExFreightBillingContactAndAddress'] = true;
        $this->fedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;
        return $this;
    }
    /**
     * Alternate unique identifier assigned to this a line item.
     *
     * @return string
     */
    public function getAliasID() : string
    {
        return $this->aliasID;
    }
    /**
     * Alternate unique identifier assigned to this a line item.
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
     * Specifies the hazardous materials offeror.
     *
     * @return string
     */
    public function getHazardousMaterialsOfferor() : string
    {
        return $this->hazardousMaterialsOfferor;
    }
    /**
     * Specifies the hazardous materials offeror.
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
    * 
    This is the declared value per unit. Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
    *
    * @return mixed
    */
    public function getDeclaredValuePerUnit()
    {
        return $this->declaredValuePerUnit;
    }
    /**
    * 
    This is the declared value per unit. Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
    *
    * @param mixed $declaredValuePerUnit
    *
    * @return self
    */
    public function setDeclaredValuePerUnit($declaredValuePerUnit) : self
    {
        $this->initialized['declaredValuePerUnit'] = true;
        $this->declaredValuePerUnit = $declaredValuePerUnit;
        return $this;
    }
    /**
     * Total number of individual handling units in the entire shipment (for unit pricing). May not be negative.
     *
     * @return int
     */
    public function getTotalHandlingUnits() : int
    {
        return $this->totalHandlingUnits;
    }
    /**
     * Total number of individual handling units in the entire shipment (for unit pricing). May not be negative.
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
     * Specify alternate billing party details. <br>Note: These details are required when paymentType selected as THIRD_PARTY.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingParty
     */
    public function getAlternateBillingParty() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingParty
    {
        return $this->alternateBillingParty;
    }
    /**
     * Specify alternate billing party details. <br>Note: These details are required when paymentType selected as THIRD_PARTY.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingParty $alternateBillingParty
     *
     * @return self
     */
    public function setAlternateBillingParty(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingParty $alternateBillingParty) : self
    {
        $this->initialized['alternateBillingParty'] = true;
        $this->alternateBillingParty = $alternateBillingParty;
        return $this;
    }
}