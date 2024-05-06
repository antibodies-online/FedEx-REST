<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailRecommendedDocumentSpecification extends \ArrayObject
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
     * This is a document type.
     *
     * @var list<string>
     */
    protected $types;
    /**
     * This is a document type.
     *
     * @return list<string>
     */
    public function getTypes() : array
    {
        return $this->types;
    }
    /**
     * This is a document type.
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