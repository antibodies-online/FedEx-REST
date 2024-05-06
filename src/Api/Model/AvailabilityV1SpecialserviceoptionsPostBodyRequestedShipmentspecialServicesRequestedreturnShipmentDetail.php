<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnShipmentDetail extends \ArrayObject
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
     * This is the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments. For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.
     *
     * @var string
     */
    protected $returnType;
    /**
     * This is the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments. For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.
     *
     * @return string
     */
    public function getReturnType() : string
    {
        return $this->returnType;
    }
    /**
     * This is the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments. For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.
     *
     * @param string $returnType
     *
     * @return self
     */
    public function setReturnType(string $returnType) : self
    {
        $this->initialized['returnType'] = true;
        $this->returnType = $returnType;
        return $this;
    }
}