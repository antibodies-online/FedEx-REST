<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescription extends \ArrayObject
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
     * This is the service type.<br>Example: INTERNATIONAL_FIRST<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>.
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Specifies the service code.<br> Example: 92.
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the service name.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescriptionNamesItem>
     */
    protected $names;
    /**
     * Specifies operating organization codes.<br> Example: 'FXG'.
     *
     * @var list<string>
     */
    protected $operatingOrgCodes;
    /**
     * Specifies astra description. <br> Example: INTL1ST.
     *
     * @var string
     */
    protected $astraDescription;
    /**
     * Specifies description of the service. <br> Example: FedEx Ground.
     *
     * @var string
     */
    protected $description;
    /**
     * Specifies the service Id. <br> Example: EP1000000135.
     *
     * @var string
     */
    protected $serviceId;
    /**
     * Specifies service category. <br> Example: parcel.
     *
     * @var string
     */
    protected $serviceCategory;

    /**
     * This is the service type.<br>Example: INTERNATIONAL_FIRST<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>.
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }

    /**
     * This is the service type.<br>Example: INTERNATIONAL_FIRST<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>.
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Specifies the service code.<br> Example: 92.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Specifies the service code.<br> Example: 92.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Specifies the service name.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescriptionNamesItem>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * Specifies the service name.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemServiceDescriptionNamesItem> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }

    /**
     * Specifies operating organization codes.<br> Example: 'FXG'.
     *
     * @return list<string>
     */
    public function getOperatingOrgCodes(): array
    {
        return $this->operatingOrgCodes;
    }

    /**
     * Specifies operating organization codes.<br> Example: 'FXG'.
     *
     * @param list<string> $operatingOrgCodes
     */
    public function setOperatingOrgCodes(array $operatingOrgCodes): self
    {
        $this->initialized['operatingOrgCodes'] = true;
        $this->operatingOrgCodes = $operatingOrgCodes;

        return $this;
    }

    /**
     * Specifies astra description. <br> Example: INTL1ST.
     */
    public function getAstraDescription(): string
    {
        return $this->astraDescription;
    }

    /**
     * Specifies astra description. <br> Example: INTL1ST.
     */
    public function setAstraDescription(string $astraDescription): self
    {
        $this->initialized['astraDescription'] = true;
        $this->astraDescription = $astraDescription;

        return $this;
    }

    /**
     * Specifies description of the service. <br> Example: FedEx Ground.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Specifies description of the service. <br> Example: FedEx Ground.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Specifies the service Id. <br> Example: EP1000000135.
     */
    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    /**
     * Specifies the service Id. <br> Example: EP1000000135.
     */
    public function setServiceId(string $serviceId): self
    {
        $this->initialized['serviceId'] = true;
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * Specifies service category. <br> Example: parcel.
     */
    public function getServiceCategory(): string
    {
        return $this->serviceCategory;
    }

    /**
     * Specifies service category. <br> Example: parcel.
     */
    public function setServiceCategory(string $serviceCategory): self
    {
        $this->initialized['serviceCategory'] = true;
        $this->serviceCategory = $serviceCategory;

        return $this;
    }
}
