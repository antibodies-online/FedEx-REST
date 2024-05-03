<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceSubOptionDetail extends \ArrayObject
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
     * This identifies the indicia used during rate quote.
     *
     * @var string
     */
    protected $smartPostIndiciaType;
    /**
     * This identifies the indicia used during rate quote.
     *
     * @return string
     */
    public function getSmartPostIndiciaType() : string
    {
        return $this->smartPostIndiciaType;
    }
    /**
     * This identifies the indicia used during rate quote.
     *
     * @param string $smartPostIndiciaType
     *
     * @return self
     */
    public function setSmartPostIndiciaType(string $smartPostIndiciaType) : self
    {
        $this->initialized['smartPostIndiciaType'] = true;
        $this->smartPostIndiciaType = $smartPostIndiciaType;
        return $this;
    }
}