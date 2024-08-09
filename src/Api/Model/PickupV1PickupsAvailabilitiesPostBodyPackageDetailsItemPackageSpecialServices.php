<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItemPackageSpecialServices extends \ArrayObject
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
     * Specifies special service types.<br>Example: DANGEROUS_GOODS<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Specifies special service types.<br>Example: DANGEROUS_GOODS<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes(): array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Specifies special service types.<br>Example: DANGEROUS_GOODS<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     * @param list<string> $specialServiceTypes
     *
     * @return self
     */
    public function setSpecialServiceTypes(array $specialServiceTypes): self
    {
        $this->initialized['specialServiceTypes'] = true;
        $this->specialServiceTypes = $specialServiceTypes;
        return $this;
    }
}