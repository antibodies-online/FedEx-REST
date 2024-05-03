<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentVariableHandlingChargeDetailFixedValue extends \ArrayObject
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
     * fixed variable handling charge amount.
     *
     * @var float
     */
    protected $amount;
    /**
     * fixed variable handling charge currency type<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     *
     * @var string
     */
    protected $currency;

    /**
     * fixed variable handling charge amount.
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * fixed variable handling charge amount.
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * fixed variable handling charge currency type<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * fixed variable handling charge currency type<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
