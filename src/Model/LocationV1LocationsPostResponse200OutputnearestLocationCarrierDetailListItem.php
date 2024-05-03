<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class LocationV1LocationsPostResponse200OutputnearestLocationCarrierDetailListItem extends \ArrayObject
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
     * Specifies the service type.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>.
     *
     * @var string
     */
    protected $serviceType;
    /**
     * The service category for which this capability applies.
     *
     * @var string
     */
    protected $serviceCategory;

    /**
     * Specifies the service type.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>.
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }

    /**
     * Specifies the service type.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>.
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * The service category for which this capability applies.
     */
    public function getServiceCategory(): string
    {
        return $this->serviceCategory;
    }

    /**
     * The service category for which this capability applies.
     */
    public function setServiceCategory(string $serviceCategory): self
    {
        $this->initialized['serviceCategory'] = true;
        $this->serviceCategory = $serviceCategory;

        return $this;
    }
}
