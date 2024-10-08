<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoice extends \ArrayObject
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
     * The originator name that will populate the Commercial Invoice (or Pro Forma).
     *
     * @var string
     */
    protected $originatorName;
    /**
     * These are comments to populated on the Commercial Invoice (or Pro Forma). <br>Example: comments
     *
     * @var list<string>
     */
    protected $comments;
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceCustomerReferencesItem>
     */
    protected $customerReferences;
    /**
     * Indicate the taxes or miscellaneous charges(other than freight charges or insurance charges) that are associated with the shipment.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceTaxesOrMiscellaneousCharge
     */
    protected $taxesOrMiscellaneousCharge;
    /**
     * Indicate the type of taxes Or miscellaneous charge.
     *
     * @var string
     */
    protected $taxesOrMiscellaneousChargeType;
    /**
     * Indicate the freight charge.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceFreightCharge
     */
    protected $freightCharge;
    /**
     * Indicate the packing cost.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoicePackingCosts
     */
    protected $packingCosts;
    /**
     * Indicate the handling cost.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceHandlingCosts
     */
    protected $handlingCosts;
    /**
     * This is the declaration statement which will populate the Commercial Invoice (or Pro Forma).<br>Maximum length is 554.<br>Example: declarationStatement
     *
     * @var string
     */
    protected $declarationStatement;
    /**
     * Specify terms Of Sale that will be populated on the Commercial Invoice (or Pro Forma). Maximum length is 3<br>Valid values are:<ul><li>FCA/FOB (Free Carrier/Free On Board): Seller is responsible for all costs of delivering goods to destination. (Default)</li><li>CIP (Costs, Insurance Paid): Seller is responsible for miscellaneous charges to destination.</li><li>CPT (Carriage Paid To): Buyer is responsible for insurance.</li><li>EXW (Ex Works): Seller makes goods available to buyer. Buyer is responsible for delivering goods to destination.</li><li>DDU (Delivered Duty Unpaid): Seller is responsible for delivering goods to destination. Buyer is responsible for clearing goods through Bureau of Customs and Border Protection.</li><li>DDP (Delivered Duty Paid): Seller is responsible for delivering goods to destination, including duties, taxes, and miscellaneous fees.</li><li>DAP (Delivered at Place): Seller pays for carriage to the named place, except for costs related to import clearance, and assumes all risks prior to the point that the goods are ready for unloading by the buyer.</li><li>DPU(Deliver at Place of Unloading)</li></ul>
     *
     * @var string
     */
    protected $termsOfSale;
    /**
     * These are special instructions that will be populated on the Commercial Invoice (or Pro Forma).<br>Example: specialInstructions
     *
     * @var string
     */
    protected $specialInstructions;
    /**
     * This is the reason for the shipment. <br>Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @var string
     */
    protected $shipmentPurpose;
    /**
     * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceEmailNotificationDetail
     */
    protected $emailNotificationDetail;
    /**
     * The originator name that will populate the Commercial Invoice (or Pro Forma).
     *
     * @return string
     */
    public function getOriginatorName(): string
    {
        return $this->originatorName;
    }
    /**
     * The originator name that will populate the Commercial Invoice (or Pro Forma).
     *
     * @param string $originatorName
     *
     * @return self
     */
    public function setOriginatorName(string $originatorName): self
    {
        $this->initialized['originatorName'] = true;
        $this->originatorName = $originatorName;
        return $this;
    }
    /**
     * These are comments to populated on the Commercial Invoice (or Pro Forma). <br>Example: comments
     *
     * @return list<string>
     */
    public function getComments(): array
    {
        return $this->comments;
    }
    /**
     * These are comments to populated on the Commercial Invoice (or Pro Forma). <br>Example: comments
     *
     * @param list<string> $comments
     *
     * @return self
     */
    public function setComments(array $comments): self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceCustomerReferencesItem>
     */
    public function getCustomerReferences(): array
    {
        return $this->customerReferences;
    }
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceCustomerReferencesItem> $customerReferences
     *
     * @return self
     */
    public function setCustomerReferences(array $customerReferences): self
    {
        $this->initialized['customerReferences'] = true;
        $this->customerReferences = $customerReferences;
        return $this;
    }
    /**
     * Indicate the taxes or miscellaneous charges(other than freight charges or insurance charges) that are associated with the shipment.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceTaxesOrMiscellaneousCharge
     */
    public function getTaxesOrMiscellaneousCharge(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceTaxesOrMiscellaneousCharge
    {
        return $this->taxesOrMiscellaneousCharge;
    }
    /**
     * Indicate the taxes or miscellaneous charges(other than freight charges or insurance charges) that are associated with the shipment.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceTaxesOrMiscellaneousCharge $taxesOrMiscellaneousCharge
     *
     * @return self
     */
    public function setTaxesOrMiscellaneousCharge(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceTaxesOrMiscellaneousCharge $taxesOrMiscellaneousCharge): self
    {
        $this->initialized['taxesOrMiscellaneousCharge'] = true;
        $this->taxesOrMiscellaneousCharge = $taxesOrMiscellaneousCharge;
        return $this;
    }
    /**
     * Indicate the type of taxes Or miscellaneous charge.
     *
     * @return string
     */
    public function getTaxesOrMiscellaneousChargeType(): string
    {
        return $this->taxesOrMiscellaneousChargeType;
    }
    /**
     * Indicate the type of taxes Or miscellaneous charge.
     *
     * @param string $taxesOrMiscellaneousChargeType
     *
     * @return self
     */
    public function setTaxesOrMiscellaneousChargeType(string $taxesOrMiscellaneousChargeType): self
    {
        $this->initialized['taxesOrMiscellaneousChargeType'] = true;
        $this->taxesOrMiscellaneousChargeType = $taxesOrMiscellaneousChargeType;
        return $this;
    }
    /**
     * Indicate the freight charge.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceFreightCharge
     */
    public function getFreightCharge(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceFreightCharge
    {
        return $this->freightCharge;
    }
    /**
     * Indicate the freight charge.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceFreightCharge $freightCharge
     *
     * @return self
     */
    public function setFreightCharge(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceFreightCharge $freightCharge): self
    {
        $this->initialized['freightCharge'] = true;
        $this->freightCharge = $freightCharge;
        return $this;
    }
    /**
     * Indicate the packing cost.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoicePackingCosts
     */
    public function getPackingCosts(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoicePackingCosts
    {
        return $this->packingCosts;
    }
    /**
     * Indicate the packing cost.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoicePackingCosts $packingCosts
     *
     * @return self
     */
    public function setPackingCosts(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoicePackingCosts $packingCosts): self
    {
        $this->initialized['packingCosts'] = true;
        $this->packingCosts = $packingCosts;
        return $this;
    }
    /**
     * Indicate the handling cost.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceHandlingCosts
     */
    public function getHandlingCosts(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceHandlingCosts
    {
        return $this->handlingCosts;
    }
    /**
     * Indicate the handling cost.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceHandlingCosts $handlingCosts
     *
     * @return self
     */
    public function setHandlingCosts(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceHandlingCosts $handlingCosts): self
    {
        $this->initialized['handlingCosts'] = true;
        $this->handlingCosts = $handlingCosts;
        return $this;
    }
    /**
     * This is the declaration statement which will populate the Commercial Invoice (or Pro Forma).<br>Maximum length is 554.<br>Example: declarationStatement
     *
     * @return string
     */
    public function getDeclarationStatement(): string
    {
        return $this->declarationStatement;
    }
    /**
     * This is the declaration statement which will populate the Commercial Invoice (or Pro Forma).<br>Maximum length is 554.<br>Example: declarationStatement
     *
     * @param string $declarationStatement
     *
     * @return self
     */
    public function setDeclarationStatement(string $declarationStatement): self
    {
        $this->initialized['declarationStatement'] = true;
        $this->declarationStatement = $declarationStatement;
        return $this;
    }
    /**
     * Specify terms Of Sale that will be populated on the Commercial Invoice (or Pro Forma). Maximum length is 3<br>Valid values are:<ul><li>FCA/FOB (Free Carrier/Free On Board): Seller is responsible for all costs of delivering goods to destination. (Default)</li><li>CIP (Costs, Insurance Paid): Seller is responsible for miscellaneous charges to destination.</li><li>CPT (Carriage Paid To): Buyer is responsible for insurance.</li><li>EXW (Ex Works): Seller makes goods available to buyer. Buyer is responsible for delivering goods to destination.</li><li>DDU (Delivered Duty Unpaid): Seller is responsible for delivering goods to destination. Buyer is responsible for clearing goods through Bureau of Customs and Border Protection.</li><li>DDP (Delivered Duty Paid): Seller is responsible for delivering goods to destination, including duties, taxes, and miscellaneous fees.</li><li>DAP (Delivered at Place): Seller pays for carriage to the named place, except for costs related to import clearance, and assumes all risks prior to the point that the goods are ready for unloading by the buyer.</li><li>DPU(Deliver at Place of Unloading)</li></ul>
     *
     * @return string
     */
    public function getTermsOfSale(): string
    {
        return $this->termsOfSale;
    }
    /**
     * Specify terms Of Sale that will be populated on the Commercial Invoice (or Pro Forma). Maximum length is 3<br>Valid values are:<ul><li>FCA/FOB (Free Carrier/Free On Board): Seller is responsible for all costs of delivering goods to destination. (Default)</li><li>CIP (Costs, Insurance Paid): Seller is responsible for miscellaneous charges to destination.</li><li>CPT (Carriage Paid To): Buyer is responsible for insurance.</li><li>EXW (Ex Works): Seller makes goods available to buyer. Buyer is responsible for delivering goods to destination.</li><li>DDU (Delivered Duty Unpaid): Seller is responsible for delivering goods to destination. Buyer is responsible for clearing goods through Bureau of Customs and Border Protection.</li><li>DDP (Delivered Duty Paid): Seller is responsible for delivering goods to destination, including duties, taxes, and miscellaneous fees.</li><li>DAP (Delivered at Place): Seller pays for carriage to the named place, except for costs related to import clearance, and assumes all risks prior to the point that the goods are ready for unloading by the buyer.</li><li>DPU(Deliver at Place of Unloading)</li></ul>
     *
     * @param string $termsOfSale
     *
     * @return self
     */
    public function setTermsOfSale(string $termsOfSale): self
    {
        $this->initialized['termsOfSale'] = true;
        $this->termsOfSale = $termsOfSale;
        return $this;
    }
    /**
     * These are special instructions that will be populated on the Commercial Invoice (or Pro Forma).<br>Example: specialInstructions
     *
     * @return string
     */
    public function getSpecialInstructions(): string
    {
        return $this->specialInstructions;
    }
    /**
     * These are special instructions that will be populated on the Commercial Invoice (or Pro Forma).<br>Example: specialInstructions
     *
     * @param string $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(string $specialInstructions): self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * This is the reason for the shipment. <br>Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @return string
     */
    public function getShipmentPurpose(): string
    {
        return $this->shipmentPurpose;
    }
    /**
     * This is the reason for the shipment. <br>Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @param string $shipmentPurpose
     *
     * @return self
     */
    public function setShipmentPurpose(string $shipmentPurpose): self
    {
        $this->initialized['shipmentPurpose'] = true;
        $this->shipmentPurpose = $shipmentPurpose;
        return $this;
    }
    /**
     * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceEmailNotificationDetail
     */
    public function getEmailNotificationDetail(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceEmailNotificationDetail
    {
        return $this->emailNotificationDetail;
    }
    /**
     * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceEmailNotificationDetail $emailNotificationDetail
     *
     * @return self
     */
    public function setEmailNotificationDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceEmailNotificationDetail $emailNotificationDetail): self
    {
        $this->initialized['emailNotificationDetail'] = true;
        $this->emailNotificationDetail = $emailNotificationDetail;
        return $this;
    }
}