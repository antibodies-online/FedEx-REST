<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayor extends \ArrayObject
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
     * These are payer details such as address, account and contacts.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsibleParty
     */
    protected $responsibleParty;
    /**
     * These are payer details such as address, account and contacts.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsibleParty
     */
    public function getResponsibleParty(): RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsibleParty
    {
        return $this->responsibleParty;
    }
    /**
     * These are payer details such as address, account and contacts.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsibleParty $responsibleParty
     *
     * @return self
     */
    public function setResponsibleParty(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsibleParty $responsibleParty): self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;
        return $this;
    }
}