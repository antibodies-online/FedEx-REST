<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TrackingnumbersPostResponse200Output extends \ArrayObject
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
     * Contains detailed tracking entry information. <br>Valid values are- ACTUAL_DELIVERY, ACTUAL_PICKUP, ACTUAL_TENDER, ANTICIPATED_TENDER, APPOINTMENT_DELIVERY, ATTEMPTED_DELIVERY, COMMITMENT, ESTIMATED_ARRIVAL_AT_GATEWAY, ESTIMATED_DELIVERY, ESTIMATED_PICKUP, ESTIMATED_RETURN_TO_STATION, SHIP, SHIPMENT_DATA_RECEIVED.
     *
     * @var list<TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItem>
     */
    protected $completeTrackResults;
    /**
     * The cxs alert type, alert code and alert message<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @var list<TrackV1TrackingnumbersPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Contains detailed tracking entry information. <br>Valid values are- ACTUAL_DELIVERY, ACTUAL_PICKUP, ACTUAL_TENDER, ANTICIPATED_TENDER, APPOINTMENT_DELIVERY, ATTEMPTED_DELIVERY, COMMITMENT, ESTIMATED_ARRIVAL_AT_GATEWAY, ESTIMATED_DELIVERY, ESTIMATED_PICKUP, ESTIMATED_RETURN_TO_STATION, SHIP, SHIPMENT_DATA_RECEIVED.
     *
     * @return list<TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItem>
     */
    public function getCompleteTrackResults(): array
    {
        return $this->completeTrackResults;
    }
    /**
     * Contains detailed tracking entry information. <br>Valid values are- ACTUAL_DELIVERY, ACTUAL_PICKUP, ACTUAL_TENDER, ANTICIPATED_TENDER, APPOINTMENT_DELIVERY, ATTEMPTED_DELIVERY, COMMITMENT, ESTIMATED_ARRIVAL_AT_GATEWAY, ESTIMATED_DELIVERY, ESTIMATED_PICKUP, ESTIMATED_RETURN_TO_STATION, SHIP, SHIPMENT_DATA_RECEIVED.
     *
     * @param list<TrackV1TrackingnumbersPostResponse200OutputCompleteTrackResultsItem> $completeTrackResults
     *
     * @return self
     */
    public function setCompleteTrackResults(array $completeTrackResults): self
    {
        $this->initialized['completeTrackResults'] = true;
        $this->completeTrackResults = $completeTrackResults;
        return $this;
    }
    /**
     * The cxs alert type, alert code and alert message<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @return list<TrackV1TrackingnumbersPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The cxs alert type, alert code and alert message<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @param list<TrackV1TrackingnumbersPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}