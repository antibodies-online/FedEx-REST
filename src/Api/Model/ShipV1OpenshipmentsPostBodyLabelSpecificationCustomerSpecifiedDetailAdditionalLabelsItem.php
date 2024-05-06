<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBodyLabelSpecificationCustomerSpecifiedDetailAdditionalLabelsItem extends \ArrayObject
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
     * Specify the type of additional  details to be added on the label.
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies the count of label to return.
     *
     * @var int
     */
    protected $count;
    /**
     * Specify the type of additional  details to be added on the label.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Specify the type of additional  details to be added on the label.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Specifies the count of label to return.
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * Specifies the count of label to return.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
}