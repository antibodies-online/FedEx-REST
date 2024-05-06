<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalControlledExportDetail extends \ArrayObject
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
     * Indicate International Controlled Export Type.<br>Example: WAREHOUSE_WITHDRAWAL
     *
     * @var string
     */
    protected $type;
    /**
     * Indicate International Controlled Export Type.<br>Example: WAREHOUSE_WITHDRAWAL
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Indicate International Controlled Export Type.<br>Example: WAREHOUSE_WITHDRAWAL
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
}