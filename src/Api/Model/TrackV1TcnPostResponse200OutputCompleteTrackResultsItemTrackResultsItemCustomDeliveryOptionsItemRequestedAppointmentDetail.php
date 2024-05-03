<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItemRequestedAppointmentDetail extends \ArrayObject
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
     * Field which holds the requested appointment date.<br>Format: YYYY-MM-DD<br> example: '2019-05-07'
     *
     * @var string
     */
    protected $date;
    /**
     * Array of different appointment time windows available on the date specified such as, Morning, afternoon, mid-day.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItemRequestedAppointmentDetailWindowItem>
     */
    protected $window;
    /**
     * Field which holds the requested appointment date.<br>Format: YYYY-MM-DD<br> example: '2019-05-07'
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * Field which holds the requested appointment date.<br>Format: YYYY-MM-DD<br> example: '2019-05-07'
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
     * Array of different appointment time windows available on the date specified such as, Morning, afternoon, mid-day.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItemRequestedAppointmentDetailWindowItem>
     */
    public function getWindow() : array
    {
        return $this->window;
    }
    /**
     * Array of different appointment time windows available on the date specified such as, Morning, afternoon, mid-day.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemCustomDeliveryOptionsItemRequestedAppointmentDetailWindowItem> $window
     *
     * @return self
     */
    public function setWindow(array $window) : self
    {
        $this->initialized['window'] = true;
        $this->window = $window;
        return $this;
    }
}