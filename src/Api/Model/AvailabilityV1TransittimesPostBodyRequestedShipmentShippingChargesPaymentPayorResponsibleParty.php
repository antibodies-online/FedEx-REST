<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty extends \ArrayObject
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
     * Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress
     */
    protected $address;
    /**
     * Specifies the FedEx customer account information of the responsible paty.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber
     */
    protected $accountNumber;
    /**
     * Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress
     */
    public function getAddress() : AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress
    {
        return $this->address;
    }
    /**
     * Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress $address
     *
     * @return self
     */
    public function setAddress(AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Specifies the FedEx customer account information of the responsible paty.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber
     */
    public function getAccountNumber() : AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * Specifies the FedEx customer account information of the responsible paty.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}