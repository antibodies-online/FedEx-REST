<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetail extends \ArrayObject
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
     * Optional, but if indicated 'amount' and 'currency' must be provided.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetailCodCollectionAmount
     */
    protected $codCollectionAmount;
    /**
     * Optional, but if indicated 'amount' and 'currency' must be provided.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetailCodCollectionAmount
     */
    public function getCodCollectionAmount(): AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Optional, but if indicated 'amount' and 'currency' must be provided.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesCodDetailCodCollectionAmount $codCollectionAmount): self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
}