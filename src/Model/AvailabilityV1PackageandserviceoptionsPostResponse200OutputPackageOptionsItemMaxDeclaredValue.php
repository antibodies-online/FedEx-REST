<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class AvailabilityV1PackageandserviceoptionsPostResponse200OutputPackageOptionsItemMaxDeclaredValue extends \ArrayObject
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
     * This is the amount. Max length 18 including decimal.<br>Example: 12.45.
     *
     * @var float
     */
    protected $amount;
    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>.
     *
     * @var string
     */
    protected $currency;

    /**
     * This is the amount. Max length 18 including decimal.<br>Example: 12.45.
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * This is the amount. Max length 18 including decimal.<br>Example: 12.45.
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>.
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
