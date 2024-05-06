<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemInnerReceptaclesItem extends \ArrayObject
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
     * Specifies Hazardous Commodity Quantity Detail.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemInnerReceptaclesItemQuantity
     */
    protected $quantity;
    /**
     * Specifies Hazardous Commodity Quantity Detail.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemInnerReceptaclesItemQuantity
     */
    public function getQuantity() : RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemInnerReceptaclesItemQuantity
    {
        return $this->quantity;
    }
    /**
     * Specifies Hazardous Commodity Quantity Detail.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemInnerReceptaclesItemQuantity $quantity
     *
     * @return self
     */
    public function setQuantity(RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemInnerReceptaclesItemQuantity $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
}