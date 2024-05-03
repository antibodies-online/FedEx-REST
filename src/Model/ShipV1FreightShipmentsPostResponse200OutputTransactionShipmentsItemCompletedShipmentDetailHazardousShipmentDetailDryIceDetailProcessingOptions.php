<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailDryIceDetailProcessingOptions extends \ArrayObject
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
     * Specifies the options.<br>Example: ["options"].
     *
     * @var list<string>
     */
    protected $options;

    /**
     * Specifies the options.<br>Example: ["options"].
     *
     * @return list<string>
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * Specifies the options.<br>Example: ["options"].
     *
     * @param list<string> $options
     */
    public function setOptions(array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;

        return $this;
    }
}
