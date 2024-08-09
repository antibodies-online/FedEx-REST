<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedinternationalControlledExportDetail extends \ArrayObject
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
     * Indicate International Controlled Export Type.
     *
     * @var string
     */
    protected $type;
    /**
     * Indicate International Controlled Export Type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Indicate International Controlled Export Type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}