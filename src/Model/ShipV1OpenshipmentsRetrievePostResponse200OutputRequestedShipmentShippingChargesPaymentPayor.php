<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayor extends \ArrayObject
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
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    protected $responsibleParty;

    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     */
    public function getResponsibleParty(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsibleParty
    {
        return $this->responsibleParty;
    }

    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     */
    public function setResponsibleParty(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty): self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;

        return $this;
    }
}