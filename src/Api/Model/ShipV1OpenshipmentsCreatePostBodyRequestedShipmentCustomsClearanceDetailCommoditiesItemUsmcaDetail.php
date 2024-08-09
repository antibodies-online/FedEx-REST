<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemUsmcaDetail extends \ArrayObject
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
     * Specify the origin criterion.
     *
     * @var string
     */
    protected $originCriterion;
    /**
     * Specify the origin criterion.
     *
     * @return string
     */
    public function getOriginCriterion(): string
    {
        return $this->originCriterion;
    }
    /**
     * Specify the origin criterion.
     *
     * @param string $originCriterion
     *
     * @return self
     */
    public function setOriginCriterion(string $originCriterion): self
    {
        $this->initialized['originCriterion'] = true;
        $this->originCriterion = $originCriterion;
        return $this;
    }
}