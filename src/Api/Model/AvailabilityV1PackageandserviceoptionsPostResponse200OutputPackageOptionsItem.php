<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItem extends \ArrayObject
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
     * Service Type represents some services like FEDEX_GROUND,INTERNATIONAL_PRIORITY, etc..,<br>Example: INTERNATIONAL_PRIORITY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @var mixed
     */
    protected $serviceType;
    /**
     * Maximum Weight allowed for the Packaging type to send with One Fixed Rate
     *
     * @var mixed
     */
    protected $oneRateMaxWeightAllowed;
    /**
     * Maximum Weight allowed for the Packaging type
     *
     * @var mixed
     */
    protected $maxWeightAllowed;
    /**
     * A set of possible rate types allowed for each Package type
     *
     * @var list<string>
     */
    protected $rateTypes;
    /**
     * An array of possible packaging types, a packaging description and applicable dimensions for each Package type.
     *
     * @var list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackagingInfoListItem>
     */
    protected $packagingInfoList;
    /**
     * 
     *
     * @var AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackageType
     */
    protected $packageType;
    /**
     * Maximum Metric Weight allowed for the Packaging type
     *
     * @var mixed
     */
    protected $maxMetricWeightAllowed;
    /**
     * Maximum Metric Weight allowed for the Packaging type with One Fixed Rate
     *
     * @var mixed
     */
    protected $oneRateMaxMetricWeightAllowed;
    /**
     * This is the maximum declared value.
     *
     * @var AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue
     */
    protected $maxDeclaredValue;
    /**
     * Service Type represents some services like FEDEX_GROUND,INTERNATIONAL_PRIORITY, etc..,<br>Example: INTERNATIONAL_PRIORITY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }
    /**
     * Service Type represents some services like FEDEX_GROUND,INTERNATIONAL_PRIORITY, etc..,<br>Example: INTERNATIONAL_PRIORITY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @param mixed $serviceType
     *
     * @return self
     */
    public function setServiceType($serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Maximum Weight allowed for the Packaging type to send with One Fixed Rate
     *
     * @return mixed
     */
    public function getOneRateMaxWeightAllowed()
    {
        return $this->oneRateMaxWeightAllowed;
    }
    /**
     * Maximum Weight allowed for the Packaging type to send with One Fixed Rate
     *
     * @param mixed $oneRateMaxWeightAllowed
     *
     * @return self
     */
    public function setOneRateMaxWeightAllowed($oneRateMaxWeightAllowed): self
    {
        $this->initialized['oneRateMaxWeightAllowed'] = true;
        $this->oneRateMaxWeightAllowed = $oneRateMaxWeightAllowed;
        return $this;
    }
    /**
     * Maximum Weight allowed for the Packaging type
     *
     * @return mixed
     */
    public function getMaxWeightAllowed()
    {
        return $this->maxWeightAllowed;
    }
    /**
     * Maximum Weight allowed for the Packaging type
     *
     * @param mixed $maxWeightAllowed
     *
     * @return self
     */
    public function setMaxWeightAllowed($maxWeightAllowed): self
    {
        $this->initialized['maxWeightAllowed'] = true;
        $this->maxWeightAllowed = $maxWeightAllowed;
        return $this;
    }
    /**
     * A set of possible rate types allowed for each Package type
     *
     * @return list<string>
     */
    public function getRateTypes(): array
    {
        return $this->rateTypes;
    }
    /**
     * A set of possible rate types allowed for each Package type
     *
     * @param list<string> $rateTypes
     *
     * @return self
     */
    public function setRateTypes(array $rateTypes): self
    {
        $this->initialized['rateTypes'] = true;
        $this->rateTypes = $rateTypes;
        return $this;
    }
    /**
     * An array of possible packaging types, a packaging description and applicable dimensions for each Package type.
     *
     * @return list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackagingInfoListItem>
     */
    public function getPackagingInfoList(): array
    {
        return $this->packagingInfoList;
    }
    /**
     * An array of possible packaging types, a packaging description and applicable dimensions for each Package type.
     *
     * @param list<AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackagingInfoListItem> $packagingInfoList
     *
     * @return self
     */
    public function setPackagingInfoList(array $packagingInfoList): self
    {
        $this->initialized['packagingInfoList'] = true;
        $this->packagingInfoList = $packagingInfoList;
        return $this;
    }
    /**
     * 
     *
     * @return AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackageType
     */
    public function getPackageType(): AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackageType
    {
        return $this->packageType;
    }
    /**
     * 
     *
     * @param AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackageType $packageType
     *
     * @return self
     */
    public function setPackageType(AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackageType $packageType): self
    {
        $this->initialized['packageType'] = true;
        $this->packageType = $packageType;
        return $this;
    }
    /**
     * Maximum Metric Weight allowed for the Packaging type
     *
     * @return mixed
     */
    public function getMaxMetricWeightAllowed()
    {
        return $this->maxMetricWeightAllowed;
    }
    /**
     * Maximum Metric Weight allowed for the Packaging type
     *
     * @param mixed $maxMetricWeightAllowed
     *
     * @return self
     */
    public function setMaxMetricWeightAllowed($maxMetricWeightAllowed): self
    {
        $this->initialized['maxMetricWeightAllowed'] = true;
        $this->maxMetricWeightAllowed = $maxMetricWeightAllowed;
        return $this;
    }
    /**
     * Maximum Metric Weight allowed for the Packaging type with One Fixed Rate
     *
     * @return mixed
     */
    public function getOneRateMaxMetricWeightAllowed()
    {
        return $this->oneRateMaxMetricWeightAllowed;
    }
    /**
     * Maximum Metric Weight allowed for the Packaging type with One Fixed Rate
     *
     * @param mixed $oneRateMaxMetricWeightAllowed
     *
     * @return self
     */
    public function setOneRateMaxMetricWeightAllowed($oneRateMaxMetricWeightAllowed): self
    {
        $this->initialized['oneRateMaxMetricWeightAllowed'] = true;
        $this->oneRateMaxMetricWeightAllowed = $oneRateMaxMetricWeightAllowed;
        return $this;
    }
    /**
     * This is the maximum declared value.
     *
     * @return AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue
     */
    public function getMaxDeclaredValue(): AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue
    {
        return $this->maxDeclaredValue;
    }
    /**
     * This is the maximum declared value.
     *
     * @param AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue $maxDeclaredValue
     *
     * @return self
     */
    public function setMaxDeclaredValue(AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue $maxDeclaredValue): self
    {
        $this->initialized['maxDeclaredValue'] = true;
        $this->maxDeclaredValue = $maxDeclaredValue;
        return $this;
    }
}