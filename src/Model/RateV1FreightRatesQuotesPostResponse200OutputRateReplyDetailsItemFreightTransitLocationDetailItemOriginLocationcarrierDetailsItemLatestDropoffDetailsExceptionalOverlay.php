<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItemLatestDropoffDetailsExceptionalOverlay extends \ArrayObject
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
     * Specifies the time for the overlay occurrence.
     *
     * @var string
     */
    protected $time;
    /**
     * Specifies the description for the overlay occurrence.
     *
     * @var string
     */
    protected $type;

    /**
     * Specifies the time for the overlay occurrence.
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * Specifies the time for the overlay occurrence.
     */
    public function setTime(string $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;

        return $this;
    }

    /**
     * Specifies the description for the overlay occurrence.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Specifies the description for the overlay occurrence.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
