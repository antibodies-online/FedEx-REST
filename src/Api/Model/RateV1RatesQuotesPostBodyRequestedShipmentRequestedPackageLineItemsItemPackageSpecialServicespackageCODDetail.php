<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetail extends \ArrayObject
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
     * Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetailCodCollectionAmount
     */
    protected $codCollectionAmount;
    /**
     * Indicate the type of funds FedEx should collect upon shipment delivery. <br> Conditionally required for Ground COD rates
     *
     * @var string
     */
    protected $codCollectionType;
    /**
     * Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetailCodCollectionAmount
     */
    public function getCodCollectionAmount(): RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetailCodCollectionAmount
    {
        return $this->codCollectionAmount;
    }
    /**
     * Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetailCodCollectionAmount $codCollectionAmount
     *
     * @return self
     */
    public function setCodCollectionAmount(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicespackageCODDetailCodCollectionAmount $codCollectionAmount): self
    {
        $this->initialized['codCollectionAmount'] = true;
        $this->codCollectionAmount = $codCollectionAmount;
        return $this;
    }
    /**
     * Indicate the type of funds FedEx should collect upon shipment delivery. <br> Conditionally required for Ground COD rates
     *
     * @return string
     */
    public function getCodCollectionType(): string
    {
        return $this->codCollectionType;
    }
    /**
     * Indicate the type of funds FedEx should collect upon shipment delivery. <br> Conditionally required for Ground COD rates
     *
     * @param string $codCollectionType
     *
     * @return self
     */
    public function setCodCollectionType(string $codCollectionType): self
    {
        $this->initialized['codCollectionType'] = true;
        $this->codCollectionType = $codCollectionType;
        return $this;
    }
}