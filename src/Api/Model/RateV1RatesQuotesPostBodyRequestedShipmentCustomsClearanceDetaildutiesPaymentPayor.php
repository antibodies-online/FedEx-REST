<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayor extends \ArrayObject
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
     * These are payer details such as address, account and contacts.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsibleParty
     */
    protected $responsibleParty;
    /**
     * These are payer details such as address, account and contacts.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsibleParty
     */
    public function getResponsibleParty() : RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsibleParty
    {
        return $this->responsibleParty;
    }
    /**
     * These are payer details such as address, account and contacts.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsibleParty $responsibleParty
     *
     * @return self
     */
    public function setResponsibleParty(RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsibleParty $responsibleParty) : self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;
        return $this;
    }
}