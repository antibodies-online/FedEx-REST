<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail extends \ArrayObject
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
     * Indicates the guaranteed delivery on date specified.
     *
     * @var string
     */
    protected $freightGuaranteeType;
    /**
     * Date and Time of shipment based on shipper’s time zone. <br>The format is YYYY-MM-DD
     *
     * @var string
     */
    protected $guaranteeTimestamp;
    /**
     * Indicates the guaranteed delivery on date specified.
     *
     * @return string
     */
    public function getFreightGuaranteeType(): string
    {
        return $this->freightGuaranteeType;
    }
    /**
     * Indicates the guaranteed delivery on date specified.
     *
     * @param string $freightGuaranteeType
     *
     * @return self
     */
    public function setFreightGuaranteeType(string $freightGuaranteeType): self
    {
        $this->initialized['freightGuaranteeType'] = true;
        $this->freightGuaranteeType = $freightGuaranteeType;
        return $this;
    }
    /**
     * Date and Time of shipment based on shipper’s time zone. <br>The format is YYYY-MM-DD
     *
     * @return string
     */
    public function getGuaranteeTimestamp(): string
    {
        return $this->guaranteeTimestamp;
    }
    /**
     * Date and Time of shipment based on shipper’s time zone. <br>The format is YYYY-MM-DD
     *
     * @param string $guaranteeTimestamp
     *
     * @return self
     */
    public function setGuaranteeTimestamp(string $guaranteeTimestamp): self
    {
        $this->initialized['guaranteeTimestamp'] = true;
        $this->guaranteeTimestamp = $guaranteeTimestamp;
        return $this;
    }
}