<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1PackageandserviceoptionsPostResponse200Output extends \ArrayObject
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
     * The available packaging options for the shipment. This also includes the applicable rate types, the weight limit, or any other information related to the shipment. </br>Valid values for the weight limit are:<br>-maxMetricWeightAllowed<br>-maxWeightAllowed<br>-oneRateMaxWeightAllowed<br>-oneRateMaxMetricWeightAllowed
     *
     * @var list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem>
     */
    protected $packageOptions;
    /**
     * Indicates if OneRate is applicable to the packaging. Returns the response as True if OneRate is applicable. Otherwise the response is False.
     *
     * @var bool
     */
    protected $oneRate;
    /**
     * The information for advanced regulatory packages.
     *
     * @var list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputAdvancedRegulatoryPackagesItem>
     */
    protected $advancedRegulatoryPackages;
    /**
     * A list of key and value pairs representing the available service and packaging options.
     *
     * @var list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputServiceOptionsItem>
     */
    protected $serviceOptions;
    /**
     * The cxs alert type, alert code, and alert message that is received when package and service options are requested.
     *
     * @var list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * The available packaging options for the shipment. This also includes the applicable rate types, the weight limit, or any other information related to the shipment. </br>Valid values for the weight limit are:<br>-maxMetricWeightAllowed<br>-maxWeightAllowed<br>-oneRateMaxWeightAllowed<br>-oneRateMaxMetricWeightAllowed
     *
     * @return list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem>
     */
    public function getPackageOptions(): array
    {
        return $this->packageOptions;
    }
    /**
     * The available packaging options for the shipment. This also includes the applicable rate types, the weight limit, or any other information related to the shipment. </br>Valid values for the weight limit are:<br>-maxMetricWeightAllowed<br>-maxWeightAllowed<br>-oneRateMaxWeightAllowed<br>-oneRateMaxMetricWeightAllowed
     *
     * @param list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem> $packageOptions
     *
     * @return self
     */
    public function setPackageOptions(array $packageOptions): self
    {
        $this->initialized['packageOptions'] = true;
        $this->packageOptions = $packageOptions;
        return $this;
    }
    /**
     * Indicates if OneRate is applicable to the packaging. Returns the response as True if OneRate is applicable. Otherwise the response is False.
     *
     * @return bool
     */
    public function getOneRate(): bool
    {
        return $this->oneRate;
    }
    /**
     * Indicates if OneRate is applicable to the packaging. Returns the response as True if OneRate is applicable. Otherwise the response is False.
     *
     * @param bool $oneRate
     *
     * @return self
     */
    public function setOneRate(bool $oneRate): self
    {
        $this->initialized['oneRate'] = true;
        $this->oneRate = $oneRate;
        return $this;
    }
    /**
     * The information for advanced regulatory packages.
     *
     * @return list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputAdvancedRegulatoryPackagesItem>
     */
    public function getAdvancedRegulatoryPackages(): array
    {
        return $this->advancedRegulatoryPackages;
    }
    /**
     * The information for advanced regulatory packages.
     *
     * @param list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputAdvancedRegulatoryPackagesItem> $advancedRegulatoryPackages
     *
     * @return self
     */
    public function setAdvancedRegulatoryPackages(array $advancedRegulatoryPackages): self
    {
        $this->initialized['advancedRegulatoryPackages'] = true;
        $this->advancedRegulatoryPackages = $advancedRegulatoryPackages;
        return $this;
    }
    /**
     * A list of key and value pairs representing the available service and packaging options.
     *
     * @return list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputServiceOptionsItem>
     */
    public function getServiceOptions(): array
    {
        return $this->serviceOptions;
    }
    /**
     * A list of key and value pairs representing the available service and packaging options.
     *
     * @param list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputServiceOptionsItem> $serviceOptions
     *
     * @return self
     */
    public function setServiceOptions(array $serviceOptions): self
    {
        $this->initialized['serviceOptions'] = true;
        $this->serviceOptions = $serviceOptions;
        return $this;
    }
    /**
     * The cxs alert type, alert code, and alert message that is received when package and service options are requested.
     *
     * @return list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The cxs alert type, alert code, and alert message that is received when package and service options are requested.
     *
     * @param list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputAlertsItem> $alerts
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