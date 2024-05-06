<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPostBodyRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetail extends \ArrayObject
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
     * @var ShipV1OpenshipmentsPackagesPostBodyRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    protected $codCollectionAmount;
    /**
     * Indicate the COD collection amount.
     *
     * @return ShipV1OpenshipmentsPackagesPostBodyRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    public function getCodCollectionAmount() : ShipV1OpenshipmentsPackagesPostBodyRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Indicate the COD collection amount.
     *
     * @param ShipV1OpenshipmentsPackagesPostBodyRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(ShipV1OpenshipmentsPackagesPostBodyRequestedPackageLineItemsItemPackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount) : self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
}