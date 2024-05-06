<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetail extends \ArrayObject
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    protected $codCollectionAmount;
    /**
     * Indicate the COD collection amount.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    public function getCodCollectionAmount() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Indicate the COD collection amount.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount) : self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
}