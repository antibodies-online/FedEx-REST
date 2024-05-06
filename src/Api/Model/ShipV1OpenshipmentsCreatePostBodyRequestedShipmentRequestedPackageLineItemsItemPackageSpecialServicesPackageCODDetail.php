<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetail extends \ArrayObject
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
     * Indicate the COD collection amount.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    protected $codCollectionAmount;
    /**
     * Indicate the COD collection amount.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    public function getCodCollectionAmount() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Indicate the COD collection amount.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount) : self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
}