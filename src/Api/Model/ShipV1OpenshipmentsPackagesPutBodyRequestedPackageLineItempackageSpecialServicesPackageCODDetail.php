<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItempackageSpecialServicesPackageCODDetail extends \ArrayObject
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
     * @var ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItempackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    protected $codCollectionAmount;
    /**
     * Indicate the COD collection amount.
     *
     * @return ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItempackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    public function getCodCollectionAmount() : ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItempackageSpecialServicesPackageCODDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Indicate the COD collection amount.
     *
     * @param ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItempackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(ShipV1OpenshipmentsPackagesPutBodyRequestedPackageLineItempackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount) : self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
}