<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail extends \ArrayObject
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
     * Specify the Dangerous Goods Accessibility Type. Valid Values: <ul><li>INACCESSIBLE - It does not have to be accessible on the aircraft.</li><li>ACCESSIBLE - It must be fully accessible on the aircraft, and is more strictly controlled.</li></ul>
     *
     * @var string
     */
    protected $accessibility;
    /**
     * Indicate the kind of content being reported.
     *
     * @var list<string>
     */
    protected $options;
    /**
     * Specify the Dangerous Goods Accessibility Type. Valid Values: <ul><li>INACCESSIBLE - It does not have to be accessible on the aircraft.</li><li>ACCESSIBLE - It must be fully accessible on the aircraft, and is more strictly controlled.</li></ul>
     *
     * @return string
     */
    public function getAccessibility(): string
    {
        return $this->accessibility;
    }
    /**
     * Specify the Dangerous Goods Accessibility Type. Valid Values: <ul><li>INACCESSIBLE - It does not have to be accessible on the aircraft.</li><li>ACCESSIBLE - It must be fully accessible on the aircraft, and is more strictly controlled.</li></ul>
     *
     * @param string $accessibility
     *
     * @return self
     */
    public function setAccessibility(string $accessibility): self
    {
        $this->initialized['accessibility'] = true;
        $this->accessibility = $accessibility;
        return $this;
    }
    /**
     * Indicate the kind of content being reported.
     *
     * @return list<string>
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     * Indicate the kind of content being reported.
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