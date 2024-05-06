<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetail extends \ArrayObject
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
     * Specify the shipping document format.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetailFormat
     */
    protected $format;
    /**
     * Specify the shipping document format.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetailFormat
     */
    public function getFormat() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetailFormat
    {
        return $this->format;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetailFormat $format
     *
     * @return self
     */
    public function setFormat(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetailFormat $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
}