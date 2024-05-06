<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsTagCancelShipmentidPutBodyCompletedTagDetail extends \ArrayObject
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
     * Confirmation Number.<br>Example: 275
     *
     * @var string
     */
    protected $confirmationNumber;
    /**
     * Applicable for FedEx Express services.<br>Example: NQAA
     *
     * @var string
     */
    protected $location;
    /**
     * The dispatch date for the FedEx Tag to be cancelled.<br>Example: 2019-08-03
     *
     * @var string
     */
    protected $dispatchDate;
    /**
     * Confirmation Number.<br>Example: 275
     *
     * @return string
     */
    public function getConfirmationNumber() : string
    {
        return $this->confirmationNumber;
    }
    /**
     * Confirmation Number.<br>Example: 275
     *
     * @param string $confirmationNumber
     *
     * @return self
     */
    public function setConfirmationNumber(string $confirmationNumber) : self
    {
        $this->initialized['confirmationNumber'] = true;
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }
    /**
     * Applicable for FedEx Express services.<br>Example: NQAA
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * Applicable for FedEx Express services.<br>Example: NQAA
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * The dispatch date for the FedEx Tag to be cancelled.<br>Example: 2019-08-03
     *
     * @return string
     */
    public function getDispatchDate() : string
    {
        return $this->dispatchDate;
    }
    /**
     * The dispatch date for the FedEx Tag to be cancelled.<br>Example: 2019-08-03
     *
     * @param string $dispatchDate
     *
     * @return self
     */
    public function setDispatchDate(string $dispatchDate) : self
    {
        $this->initialized['dispatchDate'] = true;
        $this->dispatchDate = $dispatchDate;
        return $this;
    }
}