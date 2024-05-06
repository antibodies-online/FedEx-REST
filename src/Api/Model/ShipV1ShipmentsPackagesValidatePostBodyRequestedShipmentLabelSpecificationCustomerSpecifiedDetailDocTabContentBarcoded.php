<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcoded extends \ArrayObject
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
     * Indicates the type of barcode symbology used on FedEx documents and labels.
     *
     * @var string
     */
    protected $symbology;
    /**
     * Indicates the doc tab zone specification.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcodedSpecification
     */
    protected $specification;
    /**
     * Indicates the type of barcode symbology used on FedEx documents and labels.
     *
     * @return string
     */
    public function getSymbology() : string
    {
        return $this->symbology;
    }
    /**
     * Indicates the type of barcode symbology used on FedEx documents and labels.
     *
     * @param string $symbology
     *
     * @return self
     */
    public function setSymbology(string $symbology) : self
    {
        $this->initialized['symbology'] = true;
        $this->symbology = $symbology;
        return $this;
    }
    /**
     * Indicates the doc tab zone specification.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcodedSpecification
     */
    public function getSpecification() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcodedSpecification
    {
        return $this->specification;
    }
    /**
     * Indicates the doc tab zone specification.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcodedSpecification $specification
     *
     * @return self
     */
    public function setSpecification(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcodedSpecification $specification) : self
    {
        $this->initialized['specification'] = true;
        $this->specification = $specification;
        return $this;
    }
}