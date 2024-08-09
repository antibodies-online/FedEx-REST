<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetail extends \ArrayObject
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
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    protected $codCollectionAmount;
    /**
     * Indicate the COD collection amount.
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
     */
    public function getCodCollectionAmount(): ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Indicate the COD collection amount.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServicesPackageCODDetailCodCollectionAmount $codCollectionAmount): self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
}