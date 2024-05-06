<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatOptionsRequested extends \ArrayObject
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
     * Indicates the format options. SUPPRESS_ADDITIONAL_LANGUAGES value will suppress English language if another language is specified in the language code field.
     *
     * @var list<string>
     */
    protected $options;
    /**
     * Indicates the format options. SUPPRESS_ADDITIONAL_LANGUAGES value will suppress English language if another language is specified in the language code field.
     *
     * @return list<string>
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * Indicates the format options. SUPPRESS_ADDITIONAL_LANGUAGES value will suppress English language if another language is specified in the language code field.
     *
     * @param list<string> $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}