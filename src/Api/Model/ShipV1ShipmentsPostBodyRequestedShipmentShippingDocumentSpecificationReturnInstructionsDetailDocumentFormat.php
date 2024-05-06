<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat extends \ArrayObject
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
     * Use this element to indicate whether or not to provide the instructions.
     *
     * @var bool
     */
    protected $provideInstructions;
    /**
     * Indicate the requested options for document format.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatOptionsRequested
     */
    protected $optionsRequested;
    /**
     * Specify the label stock type.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @var string
     */
    protected $stockType;
    /**
     * Details on creating, organizing, and returning the document.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItem>
     */
    protected $dispositions;
    /**
     * These are locale details.<br>example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @var string
     */
    protected $locale;
    /**
     * Specify the image format used for shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @var string
     */
    protected $docType;
    /**
     * Use this element to indicate whether or not to provide the instructions.
     *
     * @return bool
     */
    public function getProvideInstructions() : bool
    {
        return $this->provideInstructions;
    }
    /**
     * Use this element to indicate whether or not to provide the instructions.
     *
     * @param bool $provideInstructions
     *
     * @return self
     */
    public function setProvideInstructions(bool $provideInstructions) : self
    {
        $this->initialized['provideInstructions'] = true;
        $this->provideInstructions = $provideInstructions;
        return $this;
    }
    /**
     * Indicate the requested options for document format.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatOptionsRequested
     */
    public function getOptionsRequested() : ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatOptionsRequested
    {
        return $this->optionsRequested;
    }
    /**
     * Indicate the requested options for document format.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatOptionsRequested $optionsRequested
     *
     * @return self
     */
    public function setOptionsRequested(ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatOptionsRequested $optionsRequested) : self
    {
        $this->initialized['optionsRequested'] = true;
        $this->optionsRequested = $optionsRequested;
        return $this;
    }
    /**
     * Specify the label stock type.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @return string
     */
    public function getStockType() : string
    {
        return $this->stockType;
    }
    /**
     * Specify the label stock type.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @param string $stockType
     *
     * @return self
     */
    public function setStockType(string $stockType) : self
    {
        $this->initialized['stockType'] = true;
        $this->stockType = $stockType;
        return $this;
    }
    /**
     * Details on creating, organizing, and returning the document.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItem>
     */
    public function getDispositions() : array
    {
        return $this->dispositions;
    }
    /**
     * Details on creating, organizing, and returning the document.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItem> $dispositions
     *
     * @return self
     */
    public function setDispositions(array $dispositions) : self
    {
        $this->initialized['dispositions'] = true;
        $this->dispositions = $dispositions;
        return $this;
    }
    /**
     * These are locale details.<br>example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
     * These are locale details.<br>example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * Specify the image format used for shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @return string
     */
    public function getDocType() : string
    {
        return $this->docType;
    }
    /**
     * Specify the image format used for shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @param string $docType
     *
     * @return self
     */
    public function setDocType(string $docType) : self
    {
        $this->initialized['docType'] = true;
        $this->docType = $docType;
        return $this;
    }
}