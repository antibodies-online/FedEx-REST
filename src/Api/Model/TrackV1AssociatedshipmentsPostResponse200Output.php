<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostResponse200Output extends \ArrayObject
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
     * Contains the detailed tracking entry information.
     *
     * @var list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItem>
     */
    protected $completeTrackResults;
    /**
     * The cxs alert type, alert code, and alert messages.<br>Example: example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @var list<TrackV1AssociatedshipmentsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Contains the detailed tracking entry information.
     *
     * @return list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItem>
     */
    public function getCompleteTrackResults(): array
    {
        return $this->completeTrackResults;
    }
    /**
     * Contains the detailed tracking entry information.
     *
     * @param list<TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItem> $completeTrackResults
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
     * The cxs alert type, alert code, and alert messages.<br>Example: example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @return list<TrackV1AssociatedshipmentsPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The cxs alert type, alert code, and alert messages.<br>Example: example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @param list<TrackV1AssociatedshipmentsPostResponse200OutputAlertsItem> $alerts
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