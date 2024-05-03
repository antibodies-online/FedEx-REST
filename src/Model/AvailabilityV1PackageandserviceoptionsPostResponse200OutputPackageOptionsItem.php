<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

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
     * Service Type represents some services like FEDEX_GROUND,INTERNATIONAL_PRIORITY, etc..,<br>Example: INTERNATIONAL_PRIORITY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>.
     */
    protected $serviceType;
    /**
     * Maximum Weight allowed for the Packaging type to send with One Fixed Rate.
     */
    protected $oneRateMaxWeightAllowed;
    /**
     * Maximum Weight allowed for the Packaging type.
     */
    protected $maxWeightAllowed;
    /**
     * A set of possible rate types allowed for each Package type.
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
     * @var AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackageType
     */
    protected $packageType;
    /**
     * Maximum Metric Weight allowed for the Packaging type.
     */
    protected $maxMetricWeightAllowed;
    /**
     * Maximum Metric Weight allowed for the Packaging type with One Fixed Rate.
     */
    protected $oneRateMaxMetricWeightAllowed;
    /**
     * This is the maximum declared value.
     *
     * @var AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue
     */
    protected $maxDeclaredValue;

    /**
     * Service Type represents some services like FEDEX_GROUND,INTERNATIONAL_PRIORITY, etc..,<br>Example: INTERNATIONAL_PRIORITY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>.
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Service Type represents some services like FEDEX_GROUND,INTERNATIONAL_PRIORITY, etc..,<br>Example: INTERNATIONAL_PRIORITY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>.
     */
    public function setServiceType($serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Maximum Weight allowed for the Packaging type to send with One Fixed Rate.
     */
    public function getOneRateMaxWeightAllowed()
    {
        return $this->oneRateMaxWeightAllowed;
    }

    /**
     * Maximum Weight allowed for the Packaging type to send with One Fixed Rate.
     */
    public function setOneRateMaxWeightAllowed($oneRateMaxWeightAllowed): self
    {
        $this->initialized['oneRateMaxWeightAllowed'] = true;
        $this->oneRateMaxWeightAllowed = $oneRateMaxWeightAllowed;

        return $this;
    }

    /**
     * Maximum Weight allowed for the Packaging type.
     */
    public function getMaxWeightAllowed()
    {
        return $this->maxWeightAllowed;
    }

    /**
     * Maximum Weight allowed for the Packaging type.
     */
    public function setMaxWeightAllowed($maxWeightAllowed): self
    {
        $this->initialized['maxWeightAllowed'] = true;
        $this->maxWeightAllowed = $maxWeightAllowed;

        return $this;
    }

    /**
     * A set of possible rate types allowed for each Package type.
     *
     * @return list<string>
     */
    public function getRateTypes(): array
    {
        return $this->rateTypes;
    }

    /**
     * A set of possible rate types allowed for each Package type.
     *
     * @param list<string> $rateTypes
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
     */
    public function setPackagingInfoList(array $packagingInfoList): self
    {
        $this->initialized['packagingInfoList'] = true;
        $this->packagingInfoList = $packagingInfoList;

        return $this;
    }

    public function getPackageType(): AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackageType
    {
        return $this->packageType;
    }

    public function setPackageType(AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemPackageType $packageType): self
    {
        $this->initialized['packageType'] = true;
        $this->packageType = $packageType;

        return $this;
    }

    /**
     * Maximum Metric Weight allowed for the Packaging type.
     */
    public function getMaxMetricWeightAllowed()
    {
        return $this->maxMetricWeightAllowed;
    }

    /**
     * Maximum Metric Weight allowed for the Packaging type.
     */
    public function setMaxMetricWeightAllowed($maxMetricWeightAllowed): self
    {
        $this->initialized['maxMetricWeightAllowed'] = true;
        $this->maxMetricWeightAllowed = $maxMetricWeightAllowed;

        return $this;
    }

    /**
     * Maximum Metric Weight allowed for the Packaging type with One Fixed Rate.
     */
    public function getOneRateMaxMetricWeightAllowed()
    {
        return $this->oneRateMaxMetricWeightAllowed;
    }

    /**
     * Maximum Metric Weight allowed for the Packaging type with One Fixed Rate.
     */
    public function setOneRateMaxMetricWeightAllowed($oneRateMaxMetricWeightAllowed): self
    {
        $this->initialized['oneRateMaxMetricWeightAllowed'] = true;
        $this->oneRateMaxMetricWeightAllowed = $oneRateMaxMetricWeightAllowed;

        return $this;
    }

    /**
     * This is the maximum declared value.
     */
    public function getMaxDeclaredValue(): AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue
    {
        return $this->maxDeclaredValue;
    }

    /**
     * This is the maximum declared value.
     */
    public function setMaxDeclaredValue(AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue $maxDeclaredValue): self
    {
        $this->initialized['maxDeclaredValue'] = true;
        $this->maxDeclaredValue = $maxDeclaredValue;

        return $this;
    }
}
