<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailCommercialInvoiceCustomerReferencesItem extends \ArrayObject
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
     * This is a customer reference type. The value specified here for the element is printed on the Commercial Invoice only for tracking and label information.<p>Note: <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li></ul> <br>Note: INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References ENUMs</a>
     *
     * @var string
     */
    protected $customerReferenceType;
    /**
     * This is a customer reference type value.<br>Example: 3686<br>Note: Maximum length for all customer references is 40 characters.
     *
     * @var string
     */
    protected $value;
    /**
     * This is a customer reference type. The value specified here for the element is printed on the Commercial Invoice only for tracking and label information.<p>Note: <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li></ul> <br>Note: INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References ENUMs</a>
     *
     * @return string
     */
    public function getCustomerReferenceType(): string
    {
        return $this->customerReferenceType;
    }
    /**
     * This is a customer reference type. The value specified here for the element is printed on the Commercial Invoice only for tracking and label information.<p>Note: <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li></ul> <br>Note: INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References ENUMs</a>
     *
     * @param string $customerReferenceType
     *
     * @return self
     */
    public function setCustomerReferenceType(string $customerReferenceType): self
    {
        $this->initialized['customerReferenceType'] = true;
        $this->customerReferenceType = $customerReferenceType;
        return $this;
    }
    /**
     * This is a customer reference type value.<br>Example: 3686<br>Note: Maximum length for all customer references is 40 characters.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * This is a customer reference type value.<br>Example: 3686<br>Note: Maximum length for all customer references is 40 characters.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}