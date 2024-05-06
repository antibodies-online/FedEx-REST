<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
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
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * Specify the reason for the return.<br> Note: There is no validation for reason. Recommended length is 60 alpha-numeric characters<br>Example: Wrong color or size.
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
}