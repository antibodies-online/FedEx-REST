<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200Output extends \ArrayObject
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
     * Contains detailed tracking entry information.
     *
     * @var list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItem>
     */
    protected $completeTrackResults;
    /**
     * alert type, alert code, and alert message<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @var list<TrackV1TcnPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Contains detailed tracking entry information.
     *
     * @return list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItem>
     */
    public function getCompleteTrackResults(): array
    {
        return $this->completeTrackResults;
    }
    /**
     * Contains detailed tracking entry information.
     *
     * @param list<TrackV1TcnPostResponse200OutputCompleteTrackResultsItem> $completeTrackResults
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
     * alert type, alert code, and alert message<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @return list<TrackV1TcnPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * alert type, alert code, and alert message<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @param list<TrackV1TcnPostResponse200OutputAlertsItem> $alerts
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