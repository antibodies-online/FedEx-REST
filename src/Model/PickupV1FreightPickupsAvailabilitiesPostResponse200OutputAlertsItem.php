<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class PickupV1FreightPickupsAvailabilitiesPostResponse200OutputAlertsItem extends \ArrayObject
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
     * Specifies the API alert code.<br>Example: SHIP.RECIPIENT.POSTALCITY.MISMATCH.
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the API alert type.
     *
     * @var string
     */
    protected $alertType;
    /**
     * Specifies the API alert message.<br>Example: Recipient Postal-City Mismatch.
     *
     * @var string
     */
    protected $message;

    /**
     * Specifies the API alert code.<br>Example: SHIP.RECIPIENT.POSTALCITY.MISMATCH.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Specifies the API alert code.<br>Example: SHIP.RECIPIENT.POSTALCITY.MISMATCH.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Specifies the API alert type.
     */
    public function getAlertType(): string
    {
        return $this->alertType;
    }

    /**
     * Specifies the API alert type.
     */
    public function setAlertType(string $alertType): self
    {
        $this->initialized['alertType'] = true;
        $this->alertType = $alertType;

        return $this;
    }

    /**
     * Specifies the API alert message.<br>Example: Recipient Postal-City Mismatch.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Specifies the API alert message.<br>Example: Recipient Postal-City Mismatch.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}
