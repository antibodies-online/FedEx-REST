<?php

namespace AntibodiesOnline\FedEx\Model;

class TrackV1ReferencenumbersPostResponse200Output extends \ArrayObject
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
     * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files , directories and user accounts. This includes code, message and parameter.
     *
     * @var list<TrackV1ReferencenumbersPostResponse200OutputCxsErrorsItem>
     */
    protected $cxsErrors;
    /**
     * Contains detailed tracking entry information.  <br>Valid values: ACTUAL_DELIVERY, ACTUAL_PICKKUP, ACTUAL_TENDER, ANTICIPATED_TENDER, APPOINTMENT_DELIVERY, ATTEMPTED_DELIVERY, COMMITMENT, ESTIMATED_ARRIVAL_AT_GATEWAY, ESTIMATED_DELIVERY, ESTIMATED_PICKUP, ESTIMATED_RETURN_TO_STATION, SHIP, SHIPMENT_DATE_RECEIVED
     *
     * @var list<TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItem>
     */
    protected $completeTrackResults;
    /**
     * The cxs alert type, alert code, and alert message that is received.<br>example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @var list<TrackV1ReferencenumbersPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Indicates whether the tracking is successful.
     *
     * @var bool
     */
    protected $successful;
    /**
     * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files , directories and user accounts. This includes code, message and parameter.
     *
     * @return list<TrackV1ReferencenumbersPostResponse200OutputCxsErrorsItem>
     */
    public function getCxsErrors() : array
    {
        return $this->cxsErrors;
    }
    /**
     * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files , directories and user accounts. This includes code, message and parameter.
     *
     * @param list<TrackV1ReferencenumbersPostResponse200OutputCxsErrorsItem> $cxsErrors
     *
     * @return self
     */
    public function setCxsErrors(array $cxsErrors) : self
    {
        $this->initialized['cxsErrors'] = true;
        $this->cxsErrors = $cxsErrors;
        return $this;
    }
    /**
     * Contains detailed tracking entry information.  <br>Valid values: ACTUAL_DELIVERY, ACTUAL_PICKKUP, ACTUAL_TENDER, ANTICIPATED_TENDER, APPOINTMENT_DELIVERY, ATTEMPTED_DELIVERY, COMMITMENT, ESTIMATED_ARRIVAL_AT_GATEWAY, ESTIMATED_DELIVERY, ESTIMATED_PICKUP, ESTIMATED_RETURN_TO_STATION, SHIP, SHIPMENT_DATE_RECEIVED
     *
     * @return list<TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItem>
     */
    public function getCompleteTrackResults() : array
    {
        return $this->completeTrackResults;
    }
    /**
     * Contains detailed tracking entry information.  <br>Valid values: ACTUAL_DELIVERY, ACTUAL_PICKKUP, ACTUAL_TENDER, ANTICIPATED_TENDER, APPOINTMENT_DELIVERY, ATTEMPTED_DELIVERY, COMMITMENT, ESTIMATED_ARRIVAL_AT_GATEWAY, ESTIMATED_DELIVERY, ESTIMATED_PICKUP, ESTIMATED_RETURN_TO_STATION, SHIP, SHIPMENT_DATE_RECEIVED
     *
     * @param list<TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItem> $completeTrackResults
     *
     * @return self
     */
    public function setCompleteTrackResults(array $completeTrackResults) : self
    {
        $this->initialized['completeTrackResults'] = true;
        $this->completeTrackResults = $completeTrackResults;
        return $this;
    }
    /**
     * The cxs alert type, alert code, and alert message that is received.<br>example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @return list<TrackV1ReferencenumbersPostResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * The cxs alert type, alert code, and alert message that is received.<br>example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @param list<TrackV1ReferencenumbersPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts) : self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
    /**
     * Indicates whether the tracking is successful.
     *
     * @return bool
     */
    public function getSuccessful() : bool
    {
        return $this->successful;
    }
    /**
     * Indicates whether the tracking is successful.
     *
     * @param bool $successful
     *
     * @return self
     */
    public function setSuccessful(bool $successful) : self
    {
        $this->initialized['successful'] = true;
        $this->successful = $successful;
        return $this;
    }
}