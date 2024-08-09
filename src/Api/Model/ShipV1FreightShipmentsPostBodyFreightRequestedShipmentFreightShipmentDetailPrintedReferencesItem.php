<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailPrintedReferencesItem extends \ArrayObject
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
     * Identifies a particular reference identifier printed on a Freight bill of lading.
     *
     * @var string
     */
    protected $printedReferenceType;
    /**
     * Indicates the value for printed type.<br> Example: 1
     *
     * @var string
     */
    protected $value;
    /**
     * Identifies a particular reference identifier printed on a Freight bill of lading.
     *
     * @return string
     */
    public function getPrintedReferenceType(): string
    {
        return $this->printedReferenceType;
    }
    /**
     * Identifies a particular reference identifier printed on a Freight bill of lading.
     *
     * @param string $printedReferenceType
     *
     * @return self
     */
    public function setPrintedReferenceType(string $printedReferenceType): self
    {
        $this->initialized['printedReferenceType'] = true;
        $this->printedReferenceType = $printedReferenceType;
        return $this;
    }
    /**
     * Indicates the value for printed type.<br> Example: 1
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Indicates the value for printed type.<br> Example: 1
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