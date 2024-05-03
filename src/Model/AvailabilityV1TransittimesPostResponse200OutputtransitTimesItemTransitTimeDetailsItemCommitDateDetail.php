<?php

namespace AntibodiesOnline\FedEx\Model;

class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitDateDetail extends \ArrayObject
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
     * This is a day of week in a shorter day format<br>Example: MON, TUE
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * This is time in a day. <br> Format: [HH:MM:SS]<br>example: 09:30:00
     *
     * @var string
     */
    protected $time;
    /**
     * This is the day in format [MM-DD-YYYY]<br>example: Apr-13-2021
     *
     * @var string
     */
    protected $day;
    /**
     * This is a day of week in a shorter day format<br>Example: MON, TUE
     *
     * @return string
     */
    public function getDayOfWeek() : string
    {
        return $this->dayOfWeek;
    }
    /**
     * This is a day of week in a shorter day format<br>Example: MON, TUE
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
     * This is time in a day. <br> Format: [HH:MM:SS]<br>example: 09:30:00
     *
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
     * This is time in a day. <br> Format: [HH:MM:SS]<br>example: 09:30:00
     *
     * @param string $time
     *
     * @return self
     */
    public function setTime(string $time) : self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
    /**
     * This is the day in format [MM-DD-YYYY]<br>example: Apr-13-2021
     *
     * @return string
     */
    public function getDay() : string
    {
        return $this->day;
    }
    /**
     * This is the day in format [MM-DD-YYYY]<br>example: Apr-13-2021
     *
     * @param string $day
     *
     * @return self
     */
    public function setDay(string $day) : self
    {
        $this->initialized['day'] = true;
        $this->day = $day;
        return $this;
    }
}