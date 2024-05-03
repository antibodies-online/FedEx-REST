<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsVariableHandlingCharges extends \ArrayObject
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
     * Specifies the total customer assessed handling charges.<br> Example: 445.54.
     *
     * @var float
     */
    protected $totalCustomerCharge;
    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail. <br> Example: 403.2.
     *
     * @var float
     */
    protected $variableHandlingCharge;

    /**
     * Specifies the total customer assessed handling charges.<br> Example: 445.54.
     */
    public function getTotalCustomerCharge(): float
    {
        return $this->totalCustomerCharge;
    }

    /**
     * Specifies the total customer assessed handling charges.<br> Example: 445.54.
     */
    public function setTotalCustomerCharge(float $totalCustomerCharge): self
    {
        $this->initialized['totalCustomerCharge'] = true;
        $this->totalCustomerCharge = $totalCustomerCharge;

        return $this;
    }

    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail. <br> Example: 403.2.
     */
    public function getVariableHandlingCharge(): float
    {
        return $this->variableHandlingCharge;
    }

    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail. <br> Example: 403.2.
     */
    public function setVariableHandlingCharge(float $variableHandlingCharge): self
    {
        $this->initialized['variableHandlingCharge'] = true;
        $this->variableHandlingCharge = $variableHandlingCharge;

        return $this;
    }
}
