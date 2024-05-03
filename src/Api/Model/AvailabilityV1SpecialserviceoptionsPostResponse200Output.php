<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostResponse200Output extends \ArrayObject
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
     * The cxs alert type, alert code, and alert message.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * The list of options applicable when special service option is selected. The options include:<br>-Service types<br>-Signature options</br>-Package Special services list<br>-Return shipment list<br>-Carrier code<br>-Battery option list<br>-Alert list<br>-Shipment special services ist<br>-Cxs alerts
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem>
     */
    protected $serviceOptionsList;
    /**
     * The cxs alert type, alert code, and alert message.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * The cxs alert type, alert code, and alert message.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputAlertsItem> $alerts
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
     * The list of options applicable when special service option is selected. The options include:<br>-Service types<br>-Signature options</br>-Package Special services list<br>-Return shipment list<br>-Carrier code<br>-Battery option list<br>-Alert list<br>-Shipment special services ist<br>-Cxs alerts
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem>
     */
    public function getServiceOptionsList() : array
    {
        return $this->serviceOptionsList;
    }
    /**
     * The list of options applicable when special service option is selected. The options include:<br>-Service types<br>-Signature options</br>-Package Special services list<br>-Return shipment list<br>-Carrier code<br>-Battery option list<br>-Alert list<br>-Shipment special services ist<br>-Cxs alerts
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostResponse200OutputServiceOptionsListItem> $serviceOptionsList
     *
     * @return self
     */
    public function setServiceOptionsList(array $serviceOptionsList) : self
    {
        $this->initialized['serviceOptionsList'] = true;
        $this->serviceOptionsList = $serviceOptionsList;
        return $this;
    }
}