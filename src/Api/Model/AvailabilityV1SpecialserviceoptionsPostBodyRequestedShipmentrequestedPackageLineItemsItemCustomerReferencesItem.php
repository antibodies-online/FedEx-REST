<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemCustomerReferencesItem extends \ArrayObject
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
     * This is a customer reference type. Note: Use type as RMA_ASSOCIATION and value as the RMA Number to associate Ground Call Tag shipments to the outbound shipment.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References</a>
     *
     * @var string
     */
    protected $customerReferenceType;
    /**
     * This is a customer reference type value.<br>Example: 3686
     *
     * @var string
     */
    protected $value;
    /**
     * This is a customer reference type. Note: Use type as RMA_ASSOCIATION and value as the RMA Number to associate Ground Call Tag shipments to the outbound shipment.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References</a>
     *
     * @return string
     */
    public function getCustomerReferenceType(): string
    {
        return $this->customerReferenceType;
    }
    /**
     * This is a customer reference type. Note: Use type as RMA_ASSOCIATION and value as the RMA Number to associate Ground Call Tag shipments to the outbound shipment.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References</a>
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
     * This is a customer reference type value.<br>Example: 3686
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * This is a customer reference type value.<br>Example: 3686
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