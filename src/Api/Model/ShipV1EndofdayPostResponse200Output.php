<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1EndofdayPostResponse200Output extends \ArrayObject
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
     * 
     *
     * @var list<ShipV1EndofdayPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * The actual document contents for all provided reports.
     *
     * @var list<ShipV1EndofdayPostResponse200OutputCloseDocumentsItem>
     */
    protected $closeDocuments;
    /**
     * 
     *
     * @return list<ShipV1EndofdayPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * 
     *
     * @param list<ShipV1EndofdayPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
    /**
     * The actual document contents for all provided reports.
     *
     * @return list<ShipV1EndofdayPostResponse200OutputCloseDocumentsItem>
     */
    public function getCloseDocuments(): array
    {
        return $this->closeDocuments;
    }
    /**
     * The actual document contents for all provided reports.
     *
     * @param list<ShipV1EndofdayPostResponse200OutputCloseDocumentsItem> $closeDocuments
     *
     * @return self
     */
    public function setCloseDocuments(array $closeDocuments): self
    {
        $this->initialized['closeDocuments'] = true;
        $this->closeDocuments = $closeDocuments;
        return $this;
    }
}