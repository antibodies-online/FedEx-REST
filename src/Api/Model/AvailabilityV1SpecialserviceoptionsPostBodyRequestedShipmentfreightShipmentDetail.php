<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail extends \ArrayObject
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
    * Optional
    
    Overall Shipment Dimensions Value
    *
    * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailshipmentDimensions
    */
    protected $shipmentDimensions;
    /**
     * Optional : Designates a bill-to address <br> Example: true
     *
     * @var bool
     */
    protected $alternateBilling;
    /**
    * Required
    
    Class/weight pairs and associated details for a Freight shipment
    *
    * @var list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem>
    */
    protected $lineItem;
    /**
     * Required <br> Indicates the role of the party submitting the transaction <br> Example: SHIPPER
     *
     * @var string
     */
    protected $role;
    /**
     * Conditional <br> This is only used for anonymous rate requests <br> Example: 10.5
     *
     * @var float
     */
    protected $clientDiscountPercent;
    /**
    * Conditional
    
    Required if a FedEx Freight account number is specified
    *
    * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress
    */
    protected $fedExFreightBillingContactAndAddress;
    /**
     *  Conditional. <br> This is bill to alias identifier.
     *
     * @var string
     */
    protected $aliasID;
    /**
     * Specifies the Liability Coverage detail for Freight Shipment.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetail
     */
    protected $liabilityCoverageDetail;
    /**
    * Conditional
    
    FedEx Freight account number used with FEDEX_FREIGHT or FEDEX_FREIGHT_PRIORITY service; required for account-specific Freight rates
    *
    * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightAccountNumber
    */
    protected $fedExFreightAccountNumber;
    /**
    * Optional
    
    Total number of individual handling units in the entire shipment (for unit pricing). May not be negative
    *
    * @var int
    */
    protected $totalHandlingUnits;
    /**
    * Optional
    
    Overall Shipment Dimensions Value
    *
    * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailshipmentDimensions
    */
    public function getShipmentDimensions(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailshipmentDimensions
    {
        return $this->shipmentDimensions;
    }
    /**
    * Optional
    
    Overall Shipment Dimensions Value
    *
    * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailshipmentDimensions $shipmentDimensions
    *
    * @return self
    */
    public function setShipmentDimensions(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailshipmentDimensions $shipmentDimensions): self
    {
        $this->initialized['shipmentDimensions'] = true;
        $this->shipmentDimensions = $shipmentDimensions;
        return $this;
    }
    /**
     * Optional : Designates a bill-to address <br> Example: true
     *
     * @return bool
     */
    public function getAlternateBilling(): bool
    {
        return $this->alternateBilling;
    }
    /**
     * Optional : Designates a bill-to address <br> Example: true
     *
     * @param bool $alternateBilling
     *
     * @return self
     */
    public function setAlternateBilling(bool $alternateBilling): self
    {
        $this->initialized['alternateBilling'] = true;
        $this->alternateBilling = $alternateBilling;
        return $this;
    }
    /**
    * Required
    
    Class/weight pairs and associated details for a Freight shipment
    *
    * @return list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem>
    */
    public function getLineItem(): array
    {
        return $this->lineItem;
    }
    /**
    * Required
    
    Class/weight pairs and associated details for a Freight shipment
    *
    * @param list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItem> $lineItem
    *
    * @return self
    */
    public function setLineItem(array $lineItem): self
    {
        $this->initialized['lineItem'] = true;
        $this->lineItem = $lineItem;
        return $this;
    }
    /**
     * Required <br> Indicates the role of the party submitting the transaction <br> Example: SHIPPER
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * Required <br> Indicates the role of the party submitting the transaction <br> Example: SHIPPER
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * Conditional <br> This is only used for anonymous rate requests <br> Example: 10.5
     *
     * @return float
     */
    public function getClientDiscountPercent(): float
    {
        return $this->clientDiscountPercent;
    }
    /**
     * Conditional <br> This is only used for anonymous rate requests <br> Example: 10.5
     *
     * @param float $clientDiscountPercent
     *
     * @return self
     */
    public function setClientDiscountPercent(float $clientDiscountPercent): self
    {
        $this->initialized['clientDiscountPercent'] = true;
        $this->clientDiscountPercent = $clientDiscountPercent;
        return $this;
    }
    /**
    * Conditional
    
    Required if a FedEx Freight account number is specified
    *
    * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress
    */
    public function getFedExFreightBillingContactAndAddress(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress
    {
        return $this->fedExFreightBillingContactAndAddress;
    }
    /**
    * Conditional
    
    Required if a FedEx Freight account number is specified
    *
    * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress $fedExFreightBillingContactAndAddress
    *
    * @return self
    */
    public function setFedExFreightBillingContactAndAddress(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress $fedExFreightBillingContactAndAddress): self
    {
        $this->initialized['fedExFreightBillingContactAndAddress'] = true;
        $this->fedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;
        return $this;
    }
    /**
     *  Conditional. <br> This is bill to alias identifier.
     *
     * @return string
     */
    public function getAliasID(): string
    {
        return $this->aliasID;
    }
    /**
     *  Conditional. <br> This is bill to alias identifier.
     *
     * @param string $aliasID
     *
     * @return self
     */
    public function setAliasID(string $aliasID): self
    {
        $this->initialized['aliasID'] = true;
        $this->aliasID = $aliasID;
        return $this;
    }
    /**
     * Specifies the Liability Coverage detail for Freight Shipment.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetail
     */
    public function getLiabilityCoverageDetail(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetail
    {
        return $this->liabilityCoverageDetail;
    }
    /**
     * Specifies the Liability Coverage detail for Freight Shipment.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetail $liabilityCoverageDetail
     *
     * @return self
     */
    public function setLiabilityCoverageDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailliabilityCoverageDetail $liabilityCoverageDetail): self
    {
        $this->initialized['liabilityCoverageDetail'] = true;
        $this->liabilityCoverageDetail = $liabilityCoverageDetail;
        return $this;
    }
    /**
    * Conditional
    
    FedEx Freight account number used with FEDEX_FREIGHT or FEDEX_FREIGHT_PRIORITY service; required for account-specific Freight rates
    *
    * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightAccountNumber
    */
    public function getFedExFreightAccountNumber(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightAccountNumber
    {
        return $this->fedExFreightAccountNumber;
    }
    /**
    * Conditional
    
    FedEx Freight account number used with FEDEX_FREIGHT or FEDEX_FREIGHT_PRIORITY service; required for account-specific Freight rates
    *
    * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightAccountNumber $fedExFreightAccountNumber
    *
    * @return self
    */
    public function setFedExFreightAccountNumber(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightAccountNumber $fedExFreightAccountNumber): self
    {
        $this->initialized['fedExFreightAccountNumber'] = true;
        $this->fedExFreightAccountNumber = $fedExFreightAccountNumber;
        return $this;
    }
    /**
    * Optional
    
    Total number of individual handling units in the entire shipment (for unit pricing). May not be negative
    *
    * @return int
    */
    public function getTotalHandlingUnits(): int
    {
        return $this->totalHandlingUnits;
    }
    /**
    * Optional
    
    Total number of individual handling units in the entire shipment (for unit pricing). May not be negative
    *
    * @param int $totalHandlingUnits
    *
    * @return self
    */
    public function setTotalHandlingUnits(int $totalHandlingUnits): self
    {
        $this->initialized['totalHandlingUnits'] = true;
        $this->totalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
}