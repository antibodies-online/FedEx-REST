<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class AvailabilityV1TransittimesPostResponse200Output extends \ArrayObject
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
     * These are alert details received with the response.
     *
     * @var list<AvailabilityV1TransittimesPostResponse200OutputalertsItem>
     */
    protected $alerts;
    /**
     * These are services and transit times details received in the response.
     *
     * @var list<AvailabilityV1TransittimesPostResponse200OutputtransitTimesItem>
     */
    protected $transitTimes;
    /**
     * This field specifies the encoded flag.
     *
     * @var bool
     */
    protected $encoded;

    /**
     * These are alert details received with the response.
     *
     * @return list<AvailabilityV1TransittimesPostResponse200OutputalertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }

    /**
     * These are alert details received with the response.
     *
     * @param list<AvailabilityV1TransittimesPostResponse200OutputalertsItem> $alerts
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;

        return $this;
    }

    /**
     * These are services and transit times details received in the response.
     *
     * @return list<AvailabilityV1TransittimesPostResponse200OutputtransitTimesItem>
     */
    public function getTransitTimes(): array
    {
        return $this->transitTimes;
    }

    /**
     * These are services and transit times details received in the response.
     *
     * @param list<AvailabilityV1TransittimesPostResponse200OutputtransitTimesItem> $transitTimes
     */
    public function setTransitTimes(array $transitTimes): self
    {
        $this->initialized['transitTimes'] = true;
        $this->transitTimes = $transitTimes;

        return $this;
    }

    /**
     * This field specifies the encoded flag.
     */
    public function getEncoded(): bool
    {
        return $this->encoded;
    }

    /**
     * This field specifies the encoded flag.
     */
    public function setEncoded(bool $encoded): self
    {
        $this->initialized['encoded'] = true;
        $this->encoded = $encoded;

        return $this;
    }
}