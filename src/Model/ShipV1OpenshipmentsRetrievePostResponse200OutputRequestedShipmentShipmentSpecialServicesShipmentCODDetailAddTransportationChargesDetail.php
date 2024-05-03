<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail extends \ArrayObject
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
     * Specify the Rate Type used.
     *
     * @var string
     */
    protected $rateType;
    /**
     * Specify which level the rate to be applied.
     *
     * @var string
     */
    protected $rateLevelType;
    /**
     * Specify which level the charges to be applied.
     *
     * @var string
     */
    protected $chargeLevelType;
    /**
     * Specify Charge type.
     *
     * @var string
     */
    protected $chargeType;

    /**
     * Specify the Rate Type used.
     */
    public function getRateType(): string
    {
        return $this->rateType;
    }

    /**
     * Specify the Rate Type used.
     */
    public function setRateType(string $rateType): self
    {
        $this->initialized['rateType'] = true;
        $this->rateType = $rateType;

        return $this;
    }

    /**
     * Specify which level the rate to be applied.
     */
    public function getRateLevelType(): string
    {
        return $this->rateLevelType;
    }

    /**
     * Specify which level the rate to be applied.
     */
    public function setRateLevelType(string $rateLevelType): self
    {
        $this->initialized['rateLevelType'] = true;
        $this->rateLevelType = $rateLevelType;

        return $this;
    }

    /**
     * Specify which level the charges to be applied.
     */
    public function getChargeLevelType(): string
    {
        return $this->chargeLevelType;
    }

    /**
     * Specify which level the charges to be applied.
     */
    public function setChargeLevelType(string $chargeLevelType): self
    {
        $this->initialized['chargeLevelType'] = true;
        $this->chargeLevelType = $chargeLevelType;

        return $this;
    }

    /**
     * Specify Charge type.
     */
    public function getChargeType(): string
    {
        return $this->chargeType;
    }

    /**
     * Specify Charge type.
     */
    public function setChargeType(string $chargeType): self
    {
        $this->initialized['chargeType'] = true;
        $this->chargeType = $chargeType;

        return $this;
    }
}
