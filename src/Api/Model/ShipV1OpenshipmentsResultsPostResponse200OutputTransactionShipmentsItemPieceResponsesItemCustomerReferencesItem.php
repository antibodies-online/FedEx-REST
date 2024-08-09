<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemPieceResponsesItemCustomerReferencesItem extends \ArrayObject
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
     * This is a customer reference type. The value specified here for the element is printed on the Commercial Invoice only for tracking and label information.<p>Note: <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li></ul> <br>Note: INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References Enums</a>
     *
     * @var string
     */
    protected $customerReferenceType;
    /**
     * This is a customer reference type value.<br>Example: 3686 <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li><li>The RMA value sent by the customer is returned on the label in human readable form but also as a barcode. RMA_ASSOCIATION only prints on the label as a barcode for a Return shipment.</ul>NOTE:<ul><li> INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.</li><li>  Maximum length varies for value field depending on customerReferenceType.</li></ul> Maximum length for value is as follows: <ul><li>CUSTOMER_REFERENCE - 40(Express), 30(Ground)</li><li>DEPARTMENT_NUMBER - 30</li><li>INVOICE_NUMBER - 30</li><li>P_O_NUMBER - 30</li><li>INTRACOUNTRY_REGULATORY_REFERENCE - 30</li><li>RMA_ASSOCIATION - 20</li>
     *
     * @var string
     */
    protected $value;
    /**
     * This is a customer reference type. The value specified here for the element is printed on the Commercial Invoice only for tracking and label information.<p>Note: <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li></ul> <br>Note: INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References Enums</a>
     *
     * @return string
     */
    public function getCustomerReferenceType(): string
    {
        return $this->customerReferenceType;
    }
    /**
     * This is a customer reference type. The value specified here for the element is printed on the Commercial Invoice only for tracking and label information.<p>Note: <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li></ul> <br>Note: INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References Enums</a>
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
     * This is a customer reference type value.<br>Example: 3686 <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li><li>The RMA value sent by the customer is returned on the label in human readable form but also as a barcode. RMA_ASSOCIATION only prints on the label as a barcode for a Return shipment.</ul>NOTE:<ul><li> INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.</li><li>  Maximum length varies for value field depending on customerReferenceType.</li></ul> Maximum length for value is as follows: <ul><li>CUSTOMER_REFERENCE - 40(Express), 30(Ground)</li><li>DEPARTMENT_NUMBER - 30</li><li>INVOICE_NUMBER - 30</li><li>P_O_NUMBER - 30</li><li>INTRACOUNTRY_REGULATORY_REFERENCE - 30</li><li>RMA_ASSOCIATION - 20</li>
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * This is a customer reference type value.<br>Example: 3686 <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li><li>The RMA value sent by the customer is returned on the label in human readable form but also as a barcode. RMA_ASSOCIATION only prints on the label as a barcode for a Return shipment.</ul>NOTE:<ul><li> INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.</li><li>  Maximum length varies for value field depending on customerReferenceType.</li></ul> Maximum length for value is as follows: <ul><li>CUSTOMER_REFERENCE - 40(Express), 30(Ground)</li><li>DEPARTMENT_NUMBER - 30</li><li>INVOICE_NUMBER - 30</li><li>P_O_NUMBER - 30</li><li>INTRACOUNTRY_REGULATORY_REFERENCE - 30</li><li>RMA_ASSOCIATION - 20</li>
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