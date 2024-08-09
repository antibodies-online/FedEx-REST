<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetail extends \ArrayObject
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
     * Indicates the number of copies to be produced for each unique label.<br>Example: 25
     *
     * @var int
     */
    protected $copies;
    /**
     * Specify the shipping document format.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetailDocumentFormat
     */
    protected $documentFormat;
    /**
     * Specifies the quadrant of the page on which the label printing will start.
     *
     * @var string
     */
    protected $startingPosition;
    /**
     * Indicates the number of copies to be produced for each unique label.<br>Example: 25
     *
     * @return int
     */
    public function getCopies(): int
    {
        return $this->copies;
    }
    /**
     * Indicates the number of copies to be produced for each unique label.<br>Example: 25
     *
     * @param int $copies
     *
     * @return self
     */
    public function setCopies(int $copies): self
    {
        $this->initialized['copies'] = true;
        $this->copies = $copies;
        return $this;
    }
    /**
     * Specify the shipping document format.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetailDocumentFormat
     */
    public function getDocumentFormat(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetailDocumentFormat $documentFormat): self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
    /**
     * Specifies the quadrant of the page on which the label printing will start.
     *
     * @return string
     */
    public function getStartingPosition(): string
    {
        return $this->startingPosition;
    }
    /**
     * Specifies the quadrant of the page on which the label printing will start.
     *
     * @param string $startingPosition
     *
     * @return self
     */
    public function setStartingPosition(string $startingPosition): self
    {
        $this->initialized['startingPosition'] = true;
        $this->startingPosition = $startingPosition;
        return $this;
    }
}