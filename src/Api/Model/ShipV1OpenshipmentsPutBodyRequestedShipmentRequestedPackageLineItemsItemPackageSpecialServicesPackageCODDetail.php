<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetail extends \ArrayObject
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
     * Indicate the COD collection amount.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    protected $codCollectionAmount;
    /**
     * Indicate the COD collection amount.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    public function getCodCollectionAmount(): ShipV1OpenshipmentsPutBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Indicate the COD collection amount.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(ShipV1OpenshipmentsPutBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount): self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
}