<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetailOperationalInstructionsItem extends \ArrayObject
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
     * Specifies the number of operational instructions returned for this shipment.<br>Example: 17
     *
     * @var int
     */
    protected $number;
    /**
     * This is an operational instruction printed or available on the shipping document.<br>Example: SECURED
     *
     * @var string
     */
    protected $content;
    /**
     * Specifies the number of operational instructions returned for this shipment.<br>Example: 17
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * Specifies the number of operational instructions returned for this shipment.<br>Example: 17
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * This is an operational instruction printed or available on the shipping document.<br>Example: SECURED
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * This is an operational instruction printed or available on the shipping document.<br>Example: SECURED
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}