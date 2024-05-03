<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemCommitdelayDetails extends \ArrayObject
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
     * delay date.  format [YYYY-MM-DD]
     *
     * @var string
     */
    protected $date;
    /**
     * The delay day of the week
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling)
     *
     * @var string
     */
    protected $level;
    /**
     * The point in transit where the delay is occurring (e.g. Origin, Destination, Broker location)
     *
     * @var string
     */
    protected $point;
    /**
     * The reason for the delay (e.g. holiday, weekend, etc.).
     *
     * @var string
     */
    protected $type;
    /**
     * The name of the holiday in that country that is causing the delay.
     *
     * @var string
     */
    protected $description;
    /**
     * delay date.  format [YYYY-MM-DD]
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * delay date.  format [YYYY-MM-DD]
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * The delay day of the week
     *
     * @return string
     */
    public function getDayOfWeek() : string
    {
        return $this->dayOfWeek;
    }
    /**
     * The delay day of the week
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek) : self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling)
     *
     * @return string
     */
    public function getLevel() : string
    {
        return $this->level;
    }
    /**
     * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling)
     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(string $level) : self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * The point in transit where the delay is occurring (e.g. Origin, Destination, Broker location)
     *
     * @return string
     */
    public function getPoint() : string
    {
        return $this->point;
    }
    /**
     * The point in transit where the delay is occurring (e.g. Origin, Destination, Broker location)
     *
     * @param string $point
     *
     * @return self
     */
    public function setPoint(string $point) : self
    {
        $this->initialized['point'] = true;
        $this->point = $point;
        return $this;
    }
    /**
     * The reason for the delay (e.g. holiday, weekend, etc.).
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The reason for the delay (e.g. holiday, weekend, etc.).
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
     * The name of the holiday in that country that is causing the delay.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The name of the holiday in that country that is causing the delay.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}