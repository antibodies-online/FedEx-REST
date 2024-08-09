<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailPrintedReference extends \ArrayObject
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
     * Indicates the printed reference type.
     *
     * @var string
     */
    protected $printedReferenceType;
    /**
     * Specifies printed reference value.
     *
     * @var string
     */
    protected $value;
    /**
     * Indicates the printed reference type.
     *
     * @return string
     */
    public function getPrintedReferenceType(): string
    {
        return $this->printedReferenceType;
    }
    /**
     * Indicates the printed reference type.
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
     * Specifies printed reference value.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Specifies printed reference value.
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