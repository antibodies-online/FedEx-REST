<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetailRecipientsItemOptionsRequested extends \ArrayObject
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
     * These are the processing options.
     *
     * @var list<string>
     */
    protected $options;
    /**
     * These are the processing options.
     *
     * @return list<string>
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     * These are the processing options.
     *
     * @param list<string> $options
     *
     * @return self
     */
    public function setOptions(array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}