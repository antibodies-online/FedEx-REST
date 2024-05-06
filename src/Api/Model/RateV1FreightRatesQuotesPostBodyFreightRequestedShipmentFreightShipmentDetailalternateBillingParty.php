<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingParty extends \ArrayObject
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
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within  the US). Country code is required.  Postal code is required for postal aware countries.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingPartyAddress
     */
    protected $address;
    /**
     * This is the Account number details.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingPartyAccountNumber
     */
    protected $accountNumber;
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within  the US). Country code is required.  Postal code is required for postal aware countries.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingPartyAddress
     */
    public function getAddress() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingPartyAddress
    {
        return $this->address;
    }
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within  the US). Country code is required.  Postal code is required for postal aware countries.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingPartyAddress $address
     *
     * @return self
     */
    public function setAddress(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingPartyAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * This is the Account number details.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingPartyAccountNumber
     */
    public function getAccountNumber() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingPartyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is the Account number details.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingPartyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailalternateBillingPartyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}