<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailRecommendedDocumentSpecification extends \ArrayObject
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
     * This is the recommended document Type.<br><a onclick='loadDocReference("shipmentdocumenttype")'>click here to see shipment document type</a>
     *
     * @var list<string>
     */
    protected $types;
    /**
     * This is the recommended document Type.<br><a onclick='loadDocReference("shipmentdocumenttype")'>click here to see shipment document type</a>
     *
     * @return list<string>
     */
    public function getTypes() : array
    {
        return $this->types;
    }
    /**
     * This is the recommended document Type.<br><a onclick='loadDocReference("shipmentdocumenttype")'>click here to see shipment document type</a>
     *
     * @param list<string> $types
     *
     * @return self
     */
    public function setTypes(array $types) : self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
}