<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemSurchargesItem extends \ArrayObject
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
     * This is the surcharge amount.<br>Example: 15.35.
     */
    protected $amount;
    /**
     * This is the surcharge type.<br>Example: APPOINTMENT_DELIVERY.
     *
     * @var string
     */
    protected $surchargeType;
    /**
     * Specifies if the surcharge applies to the entire shipment, or to an individual package.<br>Example: PACKAGE.
     *
     * @var string
     */
    protected $level;
    /**
     * Specifies the description of the surcharge. Indicates delivery and returns information for FedEx Ground Economy services. <br>Example: Fuel Surcharge.
     *
     * @var string
     */
    protected $description;

    /**
     * This is the surcharge amount.<br>Example: 15.35.
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * This is the surcharge amount.<br>Example: 15.35.
     */
    public function setAmount($amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * This is the surcharge type.<br>Example: APPOINTMENT_DELIVERY.
     */
    public function getSurchargeType(): string
    {
        return $this->surchargeType;
    }

    /**
     * This is the surcharge type.<br>Example: APPOINTMENT_DELIVERY.
     */
    public function setSurchargeType(string $surchargeType): self
    {
        $this->initialized['surchargeType'] = true;
        $this->surchargeType = $surchargeType;

        return $this;
    }

    /**
     * Specifies if the surcharge applies to the entire shipment, or to an individual package.<br>Example: PACKAGE.
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * Specifies if the surcharge applies to the entire shipment, or to an individual package.<br>Example: PACKAGE.
     */
    public function setLevel(string $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;

        return $this;
    }

    /**
     * Specifies the description of the surcharge. Indicates delivery and returns information for FedEx Ground Economy services. <br>Example: Fuel Surcharge.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Specifies the description of the surcharge. Indicates delivery and returns information for FedEx Ground Economy services. <br>Example: Fuel Surcharge.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
