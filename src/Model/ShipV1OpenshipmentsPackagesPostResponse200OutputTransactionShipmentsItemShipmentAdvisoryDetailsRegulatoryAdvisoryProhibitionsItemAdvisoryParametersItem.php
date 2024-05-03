<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItemAdvisoryParametersItem extends \ArrayObject
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
     * Specifies the message parameter code.<br>Example: message ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Specifies the message parameter value of the code.<br>Example: value.
     *
     * @var string
     */
    protected $value;

    /**
     * Specifies the message parameter code.<br>Example: message ID.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Specifies the message parameter code.<br>Example: message ID.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the message parameter value of the code.<br>Example: value.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Specifies the message parameter value of the code.<br>Example: value.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
