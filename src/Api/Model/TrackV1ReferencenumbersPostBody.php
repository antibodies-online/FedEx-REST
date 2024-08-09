<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostBody extends \ArrayObject
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
     * Specifies the reference details for the tracked shipment. The following rules apply <br>- Either shipper.AccountNumber or Destination.countryCode(and postal for postal aware countries) are required<br>- If ShipDateRangeBegin and End are not present, shipDateRangeBegin will be set to the current date minus 30 days, and shipDdateRangeEnd will default to current date plus one day.
     *
     * @var TrackV1ReferencenumbersPostBodyReferencesInformation
     */
    protected $referencesInformation;
    /**
     * Indicates if the detailed scans are being requested or not. If true, the detailed scans will be included in the response returned. <br>Valid values are True or False.
     *
     * @var bool
     */
    protected $includeDetailedScans;
    /**
     * Specifies the reference details for the tracked shipment. The following rules apply <br>- Either shipper.AccountNumber or Destination.countryCode(and postal for postal aware countries) are required<br>- If ShipDateRangeBegin and End are not present, shipDateRangeBegin will be set to the current date minus 30 days, and shipDdateRangeEnd will default to current date plus one day.
     *
     * @return TrackV1ReferencenumbersPostBodyReferencesInformation
     */
    public function getReferencesInformation(): TrackV1ReferencenumbersPostBodyReferencesInformation
    {
        return $this->referencesInformation;
    }
    /**
     * Specifies the reference details for the tracked shipment. The following rules apply <br>- Either shipper.AccountNumber or Destination.countryCode(and postal for postal aware countries) are required<br>- If ShipDateRangeBegin and End are not present, shipDateRangeBegin will be set to the current date minus 30 days, and shipDdateRangeEnd will default to current date plus one day.
     *
     * @param TrackV1ReferencenumbersPostBodyReferencesInformation $referencesInformation
     *
     * @return self
     */
    public function setReferencesInformation(TrackV1ReferencenumbersPostBodyReferencesInformation $referencesInformation): self
    {
        $this->initialized['referencesInformation'] = true;
        $this->referencesInformation = $referencesInformation;
        return $this;
    }
    /**
     * Indicates if the detailed scans are being requested or not. If true, the detailed scans will be included in the response returned. <br>Valid values are True or False.
     *
     * @return bool
     */
    public function getIncludeDetailedScans(): bool
    {
        return $this->includeDetailedScans;
    }
    /**
     * Indicates if the detailed scans are being requested or not. If true, the detailed scans will be included in the response returned. <br>Valid values are True or False.
     *
     * @param bool $includeDetailedScans
     *
     * @return self
     */
    public function setIncludeDetailedScans(bool $includeDetailedScans): self
    {
        $this->initialized['includeDetailedScans'] = true;
        $this->includeDetailedScans = $includeDetailedScans;
        return $this;
    }
}