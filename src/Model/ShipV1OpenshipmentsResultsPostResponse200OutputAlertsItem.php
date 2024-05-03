<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsResultsPostResponse200OutputAlertsItem extends \ArrayObject
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
     * This is the alert code.<br>Example: SHIP.RECIPIENT.POSTALCITY.MISMATCH.
     *
     * @var string
     */
    protected $code;
    /**
     * This is the alert type.
     *
     * @var string
     */
    protected $alertType;
    /**
     * This is the alert message.<br>Example: Recipient Postal-City Mismatch.
     *
     * @var string
     */
    protected $message;

    /**
     * This is the alert code.<br>Example: SHIP.RECIPIENT.POSTALCITY.MISMATCH.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * This is the alert code.<br>Example: SHIP.RECIPIENT.POSTALCITY.MISMATCH.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * This is the alert type.
     */
    public function getAlertType(): string
    {
        return $this->alertType;
    }

    /**
     * This is the alert type.
     */
    public function setAlertType(string $alertType): self
    {
        $this->initialized['alertType'] = true;
        $this->alertType = $alertType;

        return $this;
    }

    /**
     * This is the alert message.<br>Example: Recipient Postal-City Mismatch.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * This is the alert message.<br>Example: Recipient Postal-City Mismatch.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}
