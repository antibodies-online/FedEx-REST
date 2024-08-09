<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostBodyTcnInfo extends \ArrayObject
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
     * Field which holds the Transportation Control Number value.<br> Example: N552428361Y555XXX
     *
     * @var string
     */
    protected $value;
    /**
     * Field which holds information about carrier code of the shipment.<br> Example: FDXE
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-03-29
     *
     * @var string
     */
    protected $shipDateBegin;
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-04-01
     *
     * @var string
     */
    protected $shipDateEnd;
    /**
     * Field which holds the Transportation Control Number value.<br> Example: N552428361Y555XXX
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Field which holds the Transportation Control Number value.<br> Example: N552428361Y555XXX
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Field which holds information about carrier code of the shipment.<br> Example: FDXE
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * Field which holds information about carrier code of the shipment.<br> Example: FDXE
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode): self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-03-29
     *
     * @return string
     */
    public function getShipDateBegin(): string
    {
        return $this->shipDateBegin;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-03-29
     *
     * @param string $shipDateBegin
     *
     * @return self
     */
    public function setShipDateBegin(string $shipDateBegin): self
    {
        $this->initialized['shipDateBegin'] = true;
        $this->shipDateBegin = $shipDateBegin;
        return $this;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-04-01
     *
     * @return string
     */
    public function getShipDateEnd(): string
    {
        return $this->shipDateEnd;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-04-01
     *
     * @param string $shipDateEnd
     *
     * @return self
     */
    public function setShipDateEnd(string $shipDateEnd): self
    {
        $this->initialized['shipDateEnd'] = true;
        $this->shipDateEnd = $shipDateEnd;
        return $this;
    }
}