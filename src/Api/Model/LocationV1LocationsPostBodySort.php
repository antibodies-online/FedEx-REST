<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostBodySort extends \ArrayObject
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
     * Specify the criteria to sort the location details.
     *
     * @var string
     */
    protected $criteria;
    /**
     * Specify the sort order of the location search results, either ascending or descending. Defaults to ascending order.
     *
     * @var string
     */
    protected $order;
    /**
     * Specify the criteria to sort the location details.
     *
     * @return string
     */
    public function getCriteria(): string
    {
        return $this->criteria;
    }
    /**
     * Specify the criteria to sort the location details.
     *
     * @param string $criteria
     *
     * @return self
     */
    public function setCriteria(string $criteria): self
    {
        $this->initialized['criteria'] = true;
        $this->criteria = $criteria;
        return $this;
    }
    /**
     * Specify the sort order of the location search results, either ascending or descending. Defaults to ascending order.
     *
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
    }
    /**
     * Specify the sort order of the location search results, either ascending or descending. Defaults to ascending order.
     *
     * @param string $order
     *
     * @return self
     */
    public function setOrder(string $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
}