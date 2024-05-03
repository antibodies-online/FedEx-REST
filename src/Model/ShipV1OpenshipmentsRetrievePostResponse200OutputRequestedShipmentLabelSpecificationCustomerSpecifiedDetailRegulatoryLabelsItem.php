<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationCustomerSpecifiedDetailRegulatoryLabelsItem extends \ArrayObject
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
     * Specify the regulatory content preference to be displayed on the label.
     *
     * @var string
     */
    protected $generationOptions;
    /**
     * Specify the type of regulatory content to be added on the label.
     *
     * @var string
     */
    protected $type;

    /**
     * Specify the regulatory content preference to be displayed on the label.
     */
    public function getGenerationOptions(): string
    {
        return $this->generationOptions;
    }

    /**
     * Specify the regulatory content preference to be displayed on the label.
     */
    public function setGenerationOptions(string $generationOptions): self
    {
        $this->initialized['generationOptions'] = true;
        $this->generationOptions = $generationOptions;

        return $this;
    }

    /**
     * Specify the type of regulatory content to be added on the label.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Specify the type of regulatory content to be added on the label.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}