<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma extends \ArrayObject
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
     * Specify the reason for the return.<br> Note: There is no validation for reason. Recommended length is 60 alpha-numeric characters<br>Example: Wrong color or size.
     *
     * @var string
     */
    protected $reason;

    /**
     * Specify the reason for the return.<br> Note: There is no validation for reason. Recommended length is 60 alpha-numeric characters<br>Example: Wrong color or size.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Specify the reason for the return.<br> Note: There is no validation for reason. Recommended length is 60 alpha-numeric characters<br>Example: Wrong color or size.
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }
}