<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailDocumentRequirementsGenerationDetailsItem extends \ArrayObject
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
     * Indicates the letterhead requirement type.<br>Example: OPTIONAL
     *
     * @var string
     */
    protected $letterhead;
    /**
     * Indicates electronic signature requirement type.<br>Example:  OPTIONAL
     *
     * @var string
     */
    protected $electronicSignature;
    /**
     * It is a non-Negative Integer.<br>Example: 3
     *
     * @var int
     */
    protected $minimumCopiesRequired;
    /**
     * It is an Enterprise Document Type.<br>Example: COMMERCIAL_INVOICE
     *
     * @var string
     */
    protected $type;
    /**
     * Indicates the letterhead requirement type.<br>Example: OPTIONAL
     *
     * @return string
     */
    public function getLetterhead() : string
    {
        return $this->letterhead;
    }
    /**
     * Indicates the letterhead requirement type.<br>Example: OPTIONAL
     *
     * @param string $letterhead
     *
     * @return self
     */
    public function setLetterhead(string $letterhead) : self
    {
        $this->initialized['letterhead'] = true;
        $this->letterhead = $letterhead;
        return $this;
    }
    /**
     * Indicates electronic signature requirement type.<br>Example:  OPTIONAL
     *
     * @return string
     */
    public function getElectronicSignature() : string
    {
        return $this->electronicSignature;
    }
    /**
     * Indicates electronic signature requirement type.<br>Example:  OPTIONAL
     *
     * @param string $electronicSignature
     *
     * @return self
     */
    public function setElectronicSignature(string $electronicSignature) : self
    {
        $this->initialized['electronicSignature'] = true;
        $this->electronicSignature = $electronicSignature;
        return $this;
    }
    /**
     * It is a non-Negative Integer.<br>Example: 3
     *
     * @return int
     */
    public function getMinimumCopiesRequired() : int
    {
        return $this->minimumCopiesRequired;
    }
    /**
     * It is a non-Negative Integer.<br>Example: 3
     *
     * @param int $minimumCopiesRequired
     *
     * @return self
     */
    public function setMinimumCopiesRequired(int $minimumCopiesRequired) : self
    {
        $this->initialized['minimumCopiesRequired'] = true;
        $this->minimumCopiesRequired = $minimumCopiesRequired;
        return $this;
    }
    /**
     * It is an Enterprise Document Type.<br>Example: COMMERCIAL_INVOICE
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * It is an Enterprise Document Type.<br>Example: COMMERCIAL_INVOICE
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}